<?php

session_start();
$_SESSION['id']=8554567;
$_SESSION['name']='Nastava';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

setcookie ('Posljednja_kupnja','Majica',time()+60);

echo '<pre>';
print_r($_COOKIE);
echo '<pre>';
?> 

	