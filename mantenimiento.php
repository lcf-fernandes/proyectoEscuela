<?php

include("conexion.php");

$ci = $_POST["txtCi"];
$nom = $_POST["txtNombres"];
$ape = $_POST["txtApellido"];
$cur = $_POST["txtCurso"];
$sec = $_POST["txtSeccion"];
$tur = $_POST["txtTurno"];
$padres = $_POST["txtPadresoencargados"];
$tel = $_POST["txtTelefono"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO test (txtCi, txtNombres, txtApellidos, txtCurso, txtSeccion, txtTurno, txtPadresoencargados, txtTelefono) 
	values ('$ci','$nom','$ape','$cur','$sec','$tur','$padres','$tel')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE test SET txtCi='$ci',txtNombres='$nom',txtApellidos='$ape',txtCurso='$cur',txtSeccion='$sec',Turno='$tur'
			,Padresoencargados='$padres', Telefono='$tel' WHERE Ci=$ci";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM test WHERE Ci=$ci";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>