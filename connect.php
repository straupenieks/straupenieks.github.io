<?php

$serveravards = "localhost";
$lietotajvards = "straupenieks";
$parole = "Parole1";
$dbvards = "straupenieks";

$savienojums = mysqli_connect($serveravards, $lietotajvards, $parole, $dbvards);

if(!$savienojums){
	die("Pieslegties neizdevas: ".mysqli_connect_error());
	mysqli_close($savienojums);
}
?>