<?php
	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	$numAccount = $_POST['num_Cuenta'];
	
	$sql = "DELETE FROM Tercera WHERE numCuenta = $numAccount";

	$result = $connection->query($sql);
	
	header("location: index.php");

?>