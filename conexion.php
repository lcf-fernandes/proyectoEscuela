<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";
$dbport = "3306"

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname , $dbport);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>