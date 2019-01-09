<?php

	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
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
	$Culturales = $_POST['Culturales_input'];
	$Servicio = $_POST['Servicio_input'];

	$sql = "INSERT INTO Tercera (numCuenta,Matematicas,Fisica,Ingles,Metodologia,Programacion,Analisis,Internet,Culturales,Servicio) VALUES ('$numCuenta','$Matematicas','$Fisica','$Ingles','$Metodologia','$Programacion','$Analisis','$Internet','$Culturales','$Servicio')";

	$result = $connection->query($sql);

	header("location: index.php");

?>