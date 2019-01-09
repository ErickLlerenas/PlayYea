<?php
	session_start();
	$account = $_POST['num_Cuenta'];
	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';
	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	//seleccionarDatos
	$sql = "SELECT * FROM Segunda WHERE numCuenta = '$account'";
	$result = $connection->query($sql);

	$row = mysqli_fetch_array($result);
	$mate = $row['Matematicas'];
	$fisica = $row['Fisica'];
	$ingles = $row['Ingles'];
	$metodologia = $row['Metodologia'];
	$progra = $row['Programacion'];
	$analisis = $row['Analisis'];
	$internet = $row['Internet'];
	$culturales = $row['Culturales'];
	$servicio = $row['Servicio'];

	$_SESSION['mate'] = $mate;
	$_SESSION['fisica'] = $fisica;
	$_SESSION['ingles'] = $ingles;
	$_SESSION['metodologia'] = $metodologia;
	$_SESSION['programacion'] = $progra;
	$_SESSION['analisis'] = $analisis;
	$_SESSION['internet'] = $internet;
	$_SESSION['culturales'] = $culturales;
	$_SESSION['servicio'] = $servicio;
 	$_SESSION['cuenta'] = $account;

	header("Location: editar2.php");
?>