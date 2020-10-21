<?php

// Sortiranje elemenata polja

$voce = array (0=>'limun', 'a' =>'naranca',1=> 'kruska', 'b' => 'ananas');

echo '<pre>';
		print_r ($voce);
echo '</pre>';

sort ($voce); 

echo '<pre>';
		print_r ($voce);
echo '</pre>';

rsort ($voce);

echo '<pre>';
		print_r ($voce);
echo '</pre>';

asort ($voce);
$voce = array (0=>'limun', 'a' =>'naranca',1=> 'kruska', 'b' => 'ananas');
echo '<pre>';
		print_r ($voce);
echo '</pre>';

arsort ($voce);
echo '<pre>';
		print_r ($voce);
echo '</pre>';
 
 ?>