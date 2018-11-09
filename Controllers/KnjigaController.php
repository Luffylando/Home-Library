<?php
	namespace App\Controllers;

	use App\Core\Controller;
    use App\Models\KnjigeModel;
	
    
	class KnjigaController extends Controller {
		public function index($id) {

			
			$this->izvuciIzSesije();

			$korisnici_id = intval($this->getSession()->get('korisnici_id'));
			$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
			$korisnici = $korisniciModel->getById($korisnici_id);
			$this->set('korisnici', $korisnici);

			$username = strtolower($korisnici->korisnicko_ime);
			
			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjiga = $knjigeModel->getByIdFromUserTable($username, $id);
			$this->set('knjiga', $knjiga);

		}
            
           public function getIzmeni($id){

			$korisnici_id = intval($this->getSession()->get('korisnici_id'));
			$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
			$korisnici = $korisniciModel->getById($korisnici_id);
			$this->set('korisnici', $korisnici);

			$username = strtolower($korisnici->korisnicko_ime);
			
			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjiga = $knjigeModel->getByIdFromUserTable($username, $id);
			$this->set('knjiga', $knjiga);
		   }

		   public function postIzmeni(){

			$this->izvuciIzSesije();

				$uploadPath = '/var/www/html/Home-Library/assets/img/';
				$slika_upload = $uploadPath . basename($_FILES['slika']['name']);
				
				$korisnici_id = intval($this->getSession()->get('korisnici_id'));
				$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
				$korisnici = $korisniciModel->getById($korisnici_id);

				$username = strtolower($korisnici->korisnicko_ime);
				$knjigeId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);				
				$naslov = filter_input(INPUT_POST, 'naslov', FILTER_SANITIZE_STRING);
				$autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
				$zanr = filter_input(INPUT_POST, 'zanr', FILTER_SANITIZE_STRING);
				$citat = filter_input(INPUT_POST, 'citat', FILTER_SANITIZE_STRING);
				$komentar = filter_input(INPUT_POST, 'komentar', FILTER_SANITIZE_STRING);
				$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

				$knjigeModel = new \App\Models\KnjigeModel($this->getDbConnection());
				$knjiga = $knjigeModel->getByIdFromUserTable($username, $knjigeId);

				if(empty($_FILES['slika']['name'])){

					$slika = $knjiga->slika;
			
				} else {

					$slika = 'http://localhost/Home-Library/assets/img/' . $_FILES['slika']['name'];
					move_uploaded_file($_FILES['slika']['tmp_name'], $slika_upload);															
					
				}
										
				$dodajKnjige = $knjigeModel->editKnjige($username, $knjigeId, [

					'autor' => $autor,
					'naslov' => $naslov,
					'zanr' => $zanr,
					'citat' => $citat,										
					'slika' =>  $slika,
					'korisnicko_ime' => $korisnici->korisnicko_ime,
					'komentar' => $komentar,
					'status' => $status,

				]);
			
				$this->redirect(\Configuration::BASE . 'pogledaj');
	
	}
}

