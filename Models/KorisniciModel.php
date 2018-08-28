<?php
	namespace App\Models;


	use App\Core\Model;

	class KorisniciModel extends Model
	{

		protected function getFields(): array {

		return [

			'korisnici_id'		     => '',
			'korisnicko_ime'    	 => '',
			'eposta'    		     => '',
			'lozinka'	   	         => '',
			'datum_uclanjivanja'	 => '',

		];
    }
}
