<?php

$users = [
	['username' => 'alex',
	//kad se dodaje nova pretraga unutar istog imena (alex) ide zarez
	'email' => 'alex@codecourse.com',
	'likes' => ['cats', 'food']],
	
	['username' => 'billy',
	'email' => 'billy@codecourse.com',
	'likes' => ['books', 'cats']]
	
	
]; 

	
	//petljom foreach i u zaradama varijabla % 
	
	
	//echo $user ['username']. '<br>'; će se na ekran izlistat svi koji imaju user name u ovom slučaju
	//alex i billy
	
	$users[] = [
	'username' => 'josh',
	'email' => 'josh@codecourse.com',
	'likes' => ['reading', 'cooking']];





?>