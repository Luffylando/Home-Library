<?php
    namespace App\Core;

    class Controller {
        private $dbc;
        private $data = [];

        public function __pre(){// ovako sm oga nazvali da ne bi mogao da se koristi kao ruta.

		}

		final public function __construct(DbConnection &$dbc){

			$this->dbc = $dbc;
		}

		final public function &getDbConnection(): \App\Core\DbConnection{

			return $this->dbc;
		}


		final public function &getSession(): \App\Core\Session\Session {
			return $this->session;
		}

		final public function setSession(\App\Core\Session\Session &$session) {
			$this->session = $session;
		}

		final protected function set(string $name, $value): bool {

			$result = false;

			if(preg_match('/^[a-z][a-z0-9]+(?:[A-Z][a-z0-9]+)*$/', $name)){
				$this->data[$name] = $value;
				$result = true;
			}

			return $result;

		}

		final public function getData(): array {

			return $this->data;
		}

		final protected function redirect(string $path, int $code = 303) {
				ob_start();
				header('Location: ' . $path, true, $code);
				exit();
		
		}

		public function izvuciIzSesije() {
            $korisnici_id = intval($this->getSession()->get('korisnici_id'));
            $korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
            $korisnici = $korisniciModel->getById($korisnici_id);

            $this->set('korisnici', $korisnici);
		}
		
		public function errorLoginRedirect(){

			$korisnici_id = intval($this->getSession()->get('korisnici_id'));
            $korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
            $korisnici = $korisniciModel->getById($korisnici_id);

            $this->set('korisnici', $korisnici);
	   
			if(!$korisnici){
				header("Location: http://localhost/1908/auth/log");
			}
			
		}

		
	}
