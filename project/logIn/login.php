<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
	<script src="js/script.js"></script>
	<link rel="shortcut icon" href="../img/Logo.png">

</head>
<body onload="redirect()">
	<?php

		$U = $_POST['input_username'];
		$C = $_POST['input_password'];
		$Server = 'localhost';
		$User = 'playyeac';
		$Password = 'lechuga150909';
		$DataBase = 'playyeac_playYeaDB';

		//conectarServidor y base de datos
		$connection = new mysqli($Server,$User,$Password,$DataBase);

		//seleccionarDatos
		$sql = "SELECT * FROM Registrar WHERE usuario = '$U' and pass = '$C'";
		$result = $connection->query($sql);

		//validarDatos
      	$count = mysqli_num_rows($result);
      	if($count > 0) //Quiere decir que sí existe
      	{
        echo'<p id="redirect">redirecting...</p>';
      	}
      	else // Si no existe
      	{
        echo'<p id="redirect"></p>';
      	}

	?>
</body>
</html>