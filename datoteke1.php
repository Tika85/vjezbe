<?php

	$filename = 'C:\xampp\htdocs\vjezbe\popis.txt';
	
	$handle - fopen($filename,'r');
	
	$velicina_datoteke = filesize($filename);
	
	$sadrzaj - fread($handle,$velicina_datoteke);
	 
	fclose ($handle);
	
	echo $sadrzaj;


?>