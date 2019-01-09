<?php
	session_start();
	$mate = $_SESSION['mate'];
	$fisica = $_SESSION['fisica'];
	$ingles = $_SESSION['ingles'];
	$metodologia = $_SESSION['metodologia'];
	$progra = $_SESSION['programacion'];
	$analisis = $_SESSION['analisis'];
	$internet = $_SESSION['internet'];
	$culturales = $_SESSION['culturales'];
	$servicio = $_SESSION['servicio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Evaluaciones</title>
	<link rel="shortcut icon" href="../../img/Logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
	<script src="scripttabla.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a href="https://playyea.com/siceuc/" id="back">Back</a></li>
			<li><a href="https://playyea.com"><img src="../../img/Logo.png" alt="logo" width="50px" height="50px"></a></li>
		</ul>
	</nav>

<?php

	echo'
	<form method="post" action="cargar3.php">

		<input type="text" placeholder="No. Cuenta" name="num_Cuenta" required minlength="8" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> 

		<button type="submit">Cargar</button>
	</form>
	';

	echo'
	<form method="post" action="upCal3.php">
	<table>
		<tr>
			<td>Matematicas</td>
			<td><input type="text" value="'.$mate.'" name="u_mate"></td>
		</tr>
		<tr>
			<td>Fisica</td>
			<td><input type="text" value="'.$fisica.'" name="u_fisica"></td>
		</tr>
		<tr>
			<td>Ingles</td>
			<td><input type="text" value="'.$ingles.'" name="u_ingles"></td>
		</tr>
		<tr>
			<td>Metodologia</td>
			<td><input type="text" value="'.$metodologia.'" name="u_metodologia"></td>
		</tr>
		<tr>
			<td>Programacion</td>
			<td><input type="text" value="'.$progra.'" name="u_progra"></td>
		</tr>
		<tr>
			<td>Analisis</td>
			<td><input type="text" value="'.$analisis.'" name="u_analisis"></td>
		</tr>
		<tr>
			<td>Internet</td>
			<td><input type="text" value="'.$internet.'" name="u_internet"></td>
		</tr>
		<tr>
			<td>Culturales y Deportivas</td>
			<td><input type="text" value="'.$culturales.'" name="u_culturales"></td>
		</tr>
		<tr>
			<td>Servicio</td>
			<td><input type="text" value="'.$servicio.'" name="u_servicio"></td>
		</tr>
	</table>
	<input type="submit" value="Actualizar Calificacion">
	</form>
	';


?>
</body>
</html>