<?php

//mysql_connect(db_server,mysql_username,mysql_password); funkcija spajanja na bazu

$db = mysqli_connect('localhost','root','');

if($db) {
	echo 'Uspjesno spajanje na bazu';}
	$db_selected = mysqli_select_db ($db,'fakultet');
	{if($db_selected)

		
		echo 'Baza je uspjesno odabrana';
	}
	else {
		echo 'Doslo je do pogreske prilikom odabira baze';
	}




?>