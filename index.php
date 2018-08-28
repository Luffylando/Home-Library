<?php
	require_once 'vendor/autoload.php';
	require_once 'Configuration.php';

	use App\Core\DbConfiguration;
	use App\Core\DbConnection;
	use App\Core\Router;

	ob_start();

	$databaseConfiguration = new DbConfiguration(
		Configuration::DB_HOST,
		Configuration::DB_USER,
		Configuration::DB_PASS,
		Configuration::DB_NAME
	);

	$databaseConnection = new DbConnection($databaseConfiguration);

	$url = strval(filter_input(INPUT_GET, 'URL'));
	$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	$router = new Router();
	$routes = require_once 'Routes.php';
	foreach($routes as $route){
		$router->add($route);
	}

	$route = $router->find($httpMethod, $url);
	$arguments = $route->extractArguments($url);
	

	$fullControllerName = '\\App\\Controllers\\' . $route->getControllerName() . 'Controller';
	$controller = new $fullControllerName($databaseConnection);

	$fingerprintProviderFactoryClass = Configuration::FINGERPRINT_PROVIDER_FACTORY;
	$fingerprintProviderFactoryMethod = Configuration::FINGERPRINT_PROVIDER_METHOD;
	$fingerprintProviderFactoryArgs = Configuration::FINGERPRINT_PROVIDER_ARGS;
	$fingerprintProviderFactory = new $fingerprintProviderFactoryClass;
	$fingerprintProvider = $fingerprintProviderFactory->$fingerprintProviderFactoryMethod(...$fingerprintProviderFactoryArgs); // ove tri tacke znace da raspakujemo ove argumente.


	$sessionStorageClassName = Configuration::SESSION_STORAGE;
	$sessionStorageConstructorArguments = Configuration::SESSION_STORAGE_DATA;
	$sessionStorage = new $sessionStorageClassName(...$sessionStorageConstructorArguments);

	$session = new App\Core\Session\Session($sessionStorage, Configuration::SESSION_LIFETIME);
  	$session->setFingerPrintProvider($fingerprintProvider);

	$controller->setSession($session);
	$controller->getSession()->reload();
	$controller->__pre();
	call_user_func_array([$controller, $route->getMethodName()], $arguments);
	$controller->getSession()->save();


	$data = $controller->getData();

	$loader = new Twig_Loader_Filesystem("./Views");
	$twig = new Twig_Environment($loader, [
		"cache"  => "./twig-cache",
		"auto_reload" => true
	]);

	$data['BASE'] = Configuration::BASE;

	echo $twig->render($route->getControllerName() . '/' . $route->getMethodName() . '.html', $data);
