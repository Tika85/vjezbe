<?php

	// Npisati funkciju koju cemo nazvati ispis_polja 
	// Funkcija prima polje kao parametar i sortira ga od najmanjeg 
	// do najveceg. I vraca vrijednost zadnjeg elementa polja
	// Ulazno polje ima brojcane vrijednosti i indenksbo polje 
	
	
	$polje = array (5,9,10,4,11,16,77,14,44,47);
	
	function sortiranje_polja ($polje)  {
		
		$a = $polje;
		sort ($a);
		
		$b =end($a);
		
		return $b;
		
	}
	$zadnji_element = srtiranje_polja ($polje);
	
	echo $zadnji_element;
	
	
	?>