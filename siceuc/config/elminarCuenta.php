<?php
	session_start();

	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	$numAccount = $_SESSION['account'];
	
	$sql = "DELETE FROM usuarios WHERE account = $numAccount";

	$result = $connection->query($sql);

	$sql = "DELETE FROM Foto WHERE usuario = $numAccount";

	$result = $connection->query($sql);
	 
	header("Location: ../");

?>