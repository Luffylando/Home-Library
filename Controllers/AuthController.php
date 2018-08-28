<?php
	namespace App\Controllers;

	use App\Core\Controller;
   
    use App\Models\KorisniciModel;
    use App\Models\KnjigeModel;
   
	class AuthController extends Controller {
		public function getRegister() {
		

    }
    
        public function postRegister(){

            $korisniciModel = new KorisniciModel($this->getDbConnection());

            $ime = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $eposta = filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_STRING);
            $lozinka = filter_input(INPUT_POST, 'lozinka', FILTER_SANITIZE_STRING);
            $loz_provera = filter_input(INPUT_POST, 'loz_provera', FILTER_SANITIZE_STRING);
            
    
            $dodajKorisnika = $korisniciModel->add([
    
                'korisnicko_ime' => $ime,
                'eposta' => $eposta,
                'lozinka' => $lozinka,
                
    
            ]);

            $napraviUserTabelu = $korisniciModel->createUserTable($ime);

            header("Location: http://localhost/1908/auth/log");

    }

    public function getLogin() {

    }

    public function postLogin() {

        $korisniciModel = new KorisniciModel($this->getDbConnection());

            $ime = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $lozinka = filter_input(INPUT_POST, 'lozinka', FILTER_SANITIZE_STRING);

            $korisnici = $korisniciModel->getByFieldName('korisnicko_ime', $ime);
            
            if($ime != $korisnici->korisnicko_ime || $lozinka != $korisnici->lozinka){

                $this->set('message', 'Nije ispravno korisnicko ime ili lozinka');
                return;
          
                   
                
            } else {

            
            $this->getSession()->put('korisnici_id', $korisnici->korisnici_id);
            $this->getSession()->save();    
            header('Location: http://localhost/1908');

         }
    }

    public function logout() {
        $this->getSession()->remove('korisnici_id');
        $this->getSession()->save();
        
        header("Location: http://localhost/1908");
    }
}

