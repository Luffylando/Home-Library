<?php
	namespace App\Controllers;

	use App\Core\Controller;
	   
	class ErrorController extends Controller {
		public function error() {

			$this->errorLoginRedirect();
			$this->izvuciIzSesije();
			
			
	
    }
}
