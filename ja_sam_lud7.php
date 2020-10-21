<?php

	$people = [
	
	'alex' => 26,
	'billy' => 21,
	//dpdavanjem => dodjeljujemu numeričku vrijednosti imenu "alex" unutar polja $people
	// jednom kada smo komandom => "alexu" vrijednost 26 (alex ima 26 godina) 
	// pozivnom komandom echo $people ['alex']; na ekranu će se ispisati broj 26 tj. vrijednost dodana varijabli "alex"
	// u ovom slućaju komanda echo $people[1]; neće na ekran pozvati "alex" nego po alexu broj 26
	
	
	];


	echo $people['alex'];
	// ukoliko se u pozivnoj naredbi echo pozove nešto što ne postoji dobije se...
	//Notice: Undefined index: bill in C:\xampp\htdocs\vjezbe\ja_sam_lud7.php on line 16
	// "undefined index" umjesto "Undefined offset"
	
	
?>