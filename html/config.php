<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = 'orhan';
$databaseName = 'kaptan';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli){
	die("Fout bij het verbinden met de database: " . mysqli_connect_error());
} else { 
	echo "verbinding met de database is gelukt! ";
}

mysqli_close($mysqli);

?>
