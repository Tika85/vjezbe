<?php

		$polje = array (1,2,3,4,5);
		
		$polje2 = array ();
		$polje2[0]=1;
		$polje2[1]=2;
		$polje2[2]=3;
		$polje2[3]=4;
		$polje2[4]=5;
		
		$polje3 = array();
		
		for ($i=0; $i<5;$i++) {
		
			$polje3[$i] = $i+1;
			
		}
		
		$polje4 = array() ;
		$i=0;
		
		while ($i<5) {
		
			$polje4[$i] = $i+1;
			$i++;
			
		}
		
		for($i=0;$i<5;$i++) {
			echo $polje2 [$i];
			echo "<br/7>";
			}
			
			foreach ($polje3 as $element) {
				echo $element;
				echo "<br/>";
			}
			
			echo "<pre>";
			print_r ($polje4);
			echo "</pre>";
			
		
// Asocijativno polje $polje5 
			$polje5 = array ();
			$polje5 ["boja1"] = "bijela";
			$polje5 ["boja2"] = "crvena";
			$polje5 ["boja3"] = "plava";
			
			echo "<pre>";
			print_r ($polje5);
			echo "</pre>";
			
// Kombinirana polja

	$polje6 = array();
	$polje6 [0] = "zuta";
	$polje6 ["a"] = "zelena";
	$polje6[1] = "narancasta";
	$polje6["b"] = "ljubicasta";

	echo "<pre>";
			print_r ($polje6);
			echo "</pre>";
	
			?>