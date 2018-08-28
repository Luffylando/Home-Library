<?php
	namespace App\Controllers;

	use App\Core\Controller;
    use App\Models\KnjigeModel;
	
    
	class HomeController extends Controller {
		public function index() {

			
			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjige = $knjigeModel->getAll();
			$this->set('knjige', $knjige);
			
			$korisnici_id = intval($this->getSession()->get('korisnici_id'));
            $korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
			$korisnici = $korisniciModel->getById($korisnici_id);;
			$this->set('korisnici', $korisnici);

	
	}
	
	public function postSearch(){

		$korisnici_id = intval($this->getSession()->get('korisnici_id'));
		$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
		$korisnici = $korisniciModel->getById($korisnici_id);;
		$this->set('korisnici', $korisnici);

		$username = strtolower($korisnici->korisnicko_ime);


			$keyword = filter_input(INPUT_POST, 'pretraga', FILTER_SANITIZE_STRING);
			$this->set('keyword', $keyword);

			
			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjige = $knjigeModel->mainSearch($keyword, $username);
			$this->set('knjige', $knjige);

	}

	public function postDelete($id){

		$korisnici_id = intval($this->getSession()->get('korisnici_id'));
		$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
		$korisnici = $korisniciModel->getById($korisnici_id);;

		$username = strtolower($korisnici->korisnicko_ime);

		$knjigeModel = new KnjigeModel($this->getDbConnection());
		$knjige = $knjigeModel->deleteBook($username, $id);

	

		header("Location: http://localhost/1908/pogledaj");

		
	}
}
