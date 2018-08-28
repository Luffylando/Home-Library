<?php
	namespace App\Models;


	use App\Core\Model;

	class KnjigeModel extends Model
	{

		protected function getFields(): array {

		return [

			'knjige_id'	         => '',
			'autor'    	         => '',
			'naslov'             => '',
			'zanr'	   	         => '',
            'citat'	             => '',
			'slika'	             => '',
			'korisnicko_ime'	 => '',
			'komentar'	         => '',
			'status'	         => '',
            

		];
    }
}
