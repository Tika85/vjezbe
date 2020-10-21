<?php
	
//Visedimenzionalno asocijativno polje koje sadrzava podatke od ucenicima: ime prezime i uspjeh.

$ucenik1 = array ('ime'=>'ivo', 'prezime' => 'ivic', 'uspjeh' =>'3');
$ucenik2 = array ('ime'=>'pero', 'prezime' => 'peric', 'uspjeh' =>'5');
$ucenik3 = array ('ime'=>'miro', 'prezime' => 'miric', 'uspjeh' =>'2');

$popis_ucenika= array ($ucenik1,$ucenik2,$ucenik3);

echo '<pre>';
		print_r ($popis_ucenika);
echo '</pre>';

?>