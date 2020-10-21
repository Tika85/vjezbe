<?php

	function funkcija1() {
	
	//kod koji funkcija izvršava
	
	//reaturn %var;
	
	echo 'ispis iz funkcije 1';
	
	}
	funkcija1();
	
	function funkcija2($a, $b) {
		
		$zbroj = $a+$b;
		
		return $zbroj;
		}
		
		$x=10;
		$y=20;
		
		$z= funkcija2($x,$y);
		
		echo '<br/>';
		echo 'vrijednost zbroja brojeva'.$x.' i ' .$y. ' je' .$z;
		
		
?>