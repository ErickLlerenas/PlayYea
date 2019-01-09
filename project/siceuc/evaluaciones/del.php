<?php
	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	$numCuenta = $_POST['valornumCuenta'];

	$sql = "DELETE FROM materias WHERE numCuenta = '$numCuenta'";

	$result = $connection->query($sql);

	//cerrarConexion
	mysqli_close($connection);
	
	header("location: index.php");

?>