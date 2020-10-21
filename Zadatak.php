<?php

	interface Automobil	{
		 function get_naziv();
		 function get_mjesta();
		 function get_starost();
		 function get_kilometri();
		
		}
		
	class Automobili implements Automobil
	{	
	protected $naziv;	
	protected $mjesto;	
	protected $starost;	
	protected $kilometri;		
	function setnaziv($novi_naziv)
	{		
	$this->naziv = $novi_naziv;	
	}		
	function setmjesto($novo_mjesto)
	{
		$this->naziv = $novo_mjesto;	}
		function setstarost($nova_starost){	
		$this->naziv = $nova_starost;	
		}		
		function setkilometri($novi_kilometri){		
		$this->naziv = $novi_kilometri;	
		}		
		function getnaziv(){		
		return $this->naziv;	}
		function getmjesta()
		{		
		return $this->mjesto;	}		
		function getstarost(){		
		return $this->starost;	}		
		function getkilometri(){		
		return $this->kilometri;	}}
		
		class Fiat extends Automobil
		{
			private $Zemlja_proizvodnje
			function set_Zemlja_proizvodnje ($zemlja)
			{
				$this->$zemlja = Zemlja_proizvodnje ;
			}
			function get_zemljaporizvodnje()
			{
			return $this ->$zemlja;
			
			}
		}
		class Kia extends Automobili
		{
			private $snaga_motora;
			function set_Snaga ($Snaga)
			{
				$this ->$snaga_motora = $snaga;
			}
			function get_snaga()
			return $this ->$snaga_motora; 
			
		
		
		?>