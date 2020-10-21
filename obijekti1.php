<?php

interface predlozak_za_covijeka {
	public function get_name();
}




class covjek  implements predlozak_za_covijeka{ 

	public $ime; 
	
	protected $mjesto_stanovanja;
	
	private $prezime; 

	function set_name($novo_ime) {
		$this->ime = $novo_ime;
	
	}
	
	function get_name() {
		return $this->ime;
	}
}
$kupac = new covjek;
$kupac -> set_name('Pero');


//echo $kupac->get_name();

//echo $kupac->ime;

class potrosac extends covjek {
	
	public $potroseni_iznos; 
	public $kupljeni_artikl;
	public $id_kupca;
	
	function set_potroseno($iznos) {
		$this->potroseni_iznos = $iznos;
	}
	function get_potroseno() {
		return $this ->potroseni_iznos;
	}
	function set_prezime($prezime) {
		$this->prezime = $prezime;
	}
	function get_prezime($prezime) {
		return $this ->prezime = $prezime;
	}
	function set_name($novo_ime) {
		$this->ime = 'Potrosacko ime:'. $novo_ime;
	}
}



$klijent = new potrosac;

$klijent->set_potroseno('1200 kn');
$klijent-> set_name ('Ivo');
$klijent -> set_prezime ('Ivic');

echo $klijent -> get_potroseno();
echo $klijent ->get_name();
echo $klijent ->get_prezime();

interface predlozak_za_covijeka {
	public function get_name();
}

?>