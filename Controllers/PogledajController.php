<?php
	namespace App\Controllers;

	use App\Core\Controller;
    use App\Models\KnjigeModel;
	
    
	class PogledajController extends Controller {
		public function index() {

			$this->errorLoginRedirect();
			$this->izvuciIzSesije();


			$korisnici_id = intval($this->getSession()->get('korisnici_id'));
			$korisniciModel = new \App\Models\KorisniciModel($this->getDbConnection());
			$korisnici = $korisniciModel->getById($korisnici_id);
			$this->set('korisnici', $korisnici);

			$username = strtolower($korisnici->korisnicko_ime);

			$knjigeModel = new KnjigeModel($this->getDbConnection());
			$knjige = $knjigeModel->getAllFromUserTable($username);
			$this->set('knjige', $knjige);
		
			
	
    }
}
