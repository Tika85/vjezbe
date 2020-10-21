<?php
//osnovna lista u polju
	$names = ['alex', 'billy', 'dale'];
	// linija 3 $= definicija liste u uglatoj zagradi alex je pozicija 0, billy pozicija 1...
	
	$names[] = 'josh';
// dodavanje dodatnog imena u polje radi se tako da se zazove varijabla $names dodaju zatvorene uglate zagrade
// polja i pod navodnike doda novo ime te zatvori točka-zarezom

	echo $names [3];
// naredbom echo sazivamo na ekran bilo koje ime unutar polja na način da
// zazovemo "echo" pa onda varijablu "names" te u uglatim zagradama poziciju na kojoj se nalazi ime
// VELIKA NAPOMENA KADA SAZIVAMO IME IDEMO OD POZICIJE NULA PA NAVIŠE!!!!!
	
	?>