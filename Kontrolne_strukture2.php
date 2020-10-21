<?php

	$ocjene = array(2,2,2,2,2,2,2);
	
	$a = $ocjene[0];
	$b = $ocjene[1];
	$c = $ocjene[2];
	$d = $ocjene[3];
	$e = $ocjene[4];
	$f = $ocjene[5];
	$g = $ocjene[6];
	
	$zbroj = $a+$b+$c+$d+$e+$f+$g;
	
	echo "zbroj ocjena je" .$zbroj;
	
	
	$prosjek = $zbroj/7;
	
	echo "Prosjek ocjena je " .$prosjek;
	
	if ($prosjek< 3.5) {

	echo "Prosjek ocjena je manji od vrlo dobar"; 

	}

	 
	elseif ($prosjek >=3.5 && $prosjek < 4.5 ); {
		echo "Prosjek ocjena je vrlo dobar";
	}
	
	

	?>