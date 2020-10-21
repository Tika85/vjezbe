<?php

$users = [
	['username' => 'alex',
	//kad se dodaje nova pretraga unutar istog imena (alex) ide zarez
	'email' => 'alex@codecourse.com',
	'likes' => ['cats', 'food']],
	// ukoliko ima više preferenci kao kod "likes" otvara se nova uglata zagrada
	
	['username' => 'billy',
	'email' => 'billy@codecourse.com',
	'likes' => ['books', 'cats']]
]; 
// cijeli gornji dio koda je ništa drugo nego dodavanje polja unutar polja za varijablu %user 
// alternativa ovome je [['username' => 'alex'],['username' => 'billy']]; sve u jednom redu
// naredbom var_dump($users); možemo dobiti pregled polja u internet preglediku

	echo $users [0]['likes'][0];
	//naredbom echo $users [0]['likes'][0]; zazivamo na ekran "cats"
	// idu 3 seta uglatih zagrada prvi pozicija "alex(0)" drugi likes ili emil a u 3 ide pozicija od likes 0 cats 1 food 
	
	
	
	
//naredba echo u ovom slučaju ima duple zagrade u prvim ide pozicija polja na kojoj je alex
// unutar drugih ide dali je pretraga po usernameu dok će se na ekranu napisati "alex".
//promjenom iz 0 u 1 unutar prvih kockastih zagrada na ekranu će se ispistati "billy".
//echo '<pre>', var_dump($users), '</pre>';
// naredbom '<pre>' ćuvamo var dap naredba znaći "preformating" između naredba ide zarez može i točka
// naredbom echo $users [0]['email']; ispisat će se prvi red unutar polja (alex@codecorse.com)

?>