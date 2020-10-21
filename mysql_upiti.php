<?php

include ('mysql.php');

$query = 'SELECT * FROM stud';

$rezultat = mysqli_query($db,'select');

if ($rezultat) {
	echo 'Upit je uspjesno izvrsen';
	echo 'broj studenata je:' .  mysql_num_rows($rezultat);
	while ($row=mysqli_fetch_row($rezultat)) {
	echo 'ime': .$row[1].' Prezime: ' . $row[2]. '<br/>'
	
	}
}

else {
echo 'doslo je do pogreske';
}

?>