<?php

	$names = ['alex', 'billy', 'muflon'];
	// varijabla se definira dolarom i izjednačava poljem koje započima i završava sa [] te kraj linije ;
	// unutar varijable polja svako ime ili naziv se piše po principu '', unutar navoda ide ime ili naziv
	// svaki sljedeći naziv se nastavlja sa zarezom
	
	
	$names [] = 'kitozder';
	
	//dodavanje novog naziva u polje mora ici prije naredbe echo
	// da je linija 9 prebačena na liniju 20 dobio bi se error na "echo $names [3];" naredbi
	
	
	echo $names [3];
	 
	// pozivnom naredbom echo te imenom varijable "$names" te uglatom zagradom pozvar će se varijabla na ekran
	// 	polje počima sa 0 znaći 0=alex, broj 1=billy broj 2 = muflon
	




?>