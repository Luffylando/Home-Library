<?php
	namespace App\Controllers;

	use App\Core\Controller;
    use App\Models\KnjigeModel;
	
    
	class DodajController extends Controller {
		public function index() {

		
			$this->errorLoginRedirect();
			$this->izvuciIzSesije();
		
			session_start();
			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjige = $knjigeModel->getAll();
			$this->set('knjige', $knjige);	
	}
	
	public function post() {

		$this->errorLoginRedirect();		
		$this->izvuciIzSesije();

		$korisnici_id = intval($this->getSession()->get('korisnici_id'));
		$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
		$korisnici = $korisniciModel->getById($korisnici_id);

		$username = strtolower($korisnici->korisnicko_ime);

		$knjigeModel = new KnjigeModel($this->getDbConnection());

		$uploadPath = '/var/www/html/Home-Library/assets/img/';
		//for windows path  $uploadPath = 'C:/xampp/htdocs/Home-Library/assets/img/;
		$slika_upload = $uploadPath . basename($_FILES['slika']['name']);

		$naslov = filter_input(INPUT_POST, 'naslov', FILTER_SANITIZE_STRING);
		$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
		$zanr = filter_input(INPUT_POST, 'zanr', FILTER_SANITIZE_STRING);
		$citat = filter_input(INPUT_POST, 'citat', FILTER_SANITIZE_STRING);
		$slika = 'http://localhost/Home-Library/assets/img/' . $_FILES['slika']['name'];
		$komentar = filter_input(INPUT_POST, 'komentar', FILTER_SANITIZE_STRING);
		$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

		$dodajKnjige = $knjigeModel->insertIntoUserTable($username,[

			'autor' => $autor,
			'naslov' => $naslov,
			'zanr' => $zanr,
			'citat' => $citat,
			'slika' => $slika,
			'korisnicko_ime' => $korisnici->korisnicko_ime,
			'komentar' => $komentar,
			'status' => $status,


		]);

		if(!empty($_FILES)){
		move_uploaded_file($_FILES['slika']['tmp_name'], $slika_upload);
		}
		$this->redirect(\Configuration::BASE . '/pogledaj');

	}
}

