<?php

	$Server = 'localhost';
	$User = 'root';
	$Password = 'ucolbach8';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	$numCuenta = $_POST['numCuenta_input'];
	$Matematicas = $_POST['Matematicas_input'];
	$Fisica = $_POST['Fisica_input'];
	$Ingles = $_POST['Ingles_input'];
	$Metodologia = $_POST['Metodologia_input'];
	$Programacion = $_POST['Programacion_input'];
	$Analisis = $_POST['Analisis_input'];
	$Internet = $_POST['Internet_input'];

	$sql = "INSERT INTO Materias (numCuenta,Matematicas,Fisica,Ingles,Metodologia,Programacion,Analisis,Internet) VALUES ('$numCuenta','$Matematicas','$Fisica','$Ingles','$Metodologia','$Programacion','$Analisis','$Internet')";

	$result = $connection->query($sql);

	//cerrarConexion
	mysqli_close($connection);

	header("location: index.php");

?>