<?php
	session_start();

	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);
	$mate = $_POST['u_mate'];
	$fisica = $_POST['u_fisica'];
	$ingles = $_POST['u_ingles'];
	$meto = $_POST['u_metodologia'];
	$progra = $_POST['u_progra'];
	$analisis = $_POST['u_analisis'];
	$internet = $_POST['u_internet'];
	$cult = $_POST['u_culturales'];
	$serv = $_POST['u_servicio'];
	$account = $_SESSION['cuenta'];

	$sql = "UPDATE Tercera SET Matematicas = '$mate', Fisica = '$fisica', Ingles = '$ingles', Metodologia = '$meto',  Programacion = '$progra', Analisis = '$analisis', Internet = '$internet', Culturales = '$cult', Servicio = '$serv' WHERE numCuenta = '$account'";

	$result = $connection->query($sql);
	

	$_SESSION['mate'] = "";
	$_SESSION['fisica'] = "";
	$_SESSION['ingles'] = "";
	$_SESSION['metodologia'] = "";
	$_SESSION['programacion'] = "";
	$_SESSION['analisis'] = "";
	$_SESSION['internet'] = "";
	$_SESSION['culturales'] = "";
	$_SESSION['servicio'] = "";
 	$_SESSION['cuenta'] = "";
	header("Location: index.php");
?>