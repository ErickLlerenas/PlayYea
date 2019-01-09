<?php
session_start();
?>
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

		$A = $_POST['input_account'];
		$C = $_POST['input_password'];
		$Server = 'localhost';
		$User = 'playyeac';
		$Password = 'lechuga150909';
		$DataBase = 'playyeac_playYeaDB';

		//conectarServidor y base de datos
		$connection = new mysqli($Server,$User,$Password,$DataBase);

		//seleccionarDatos
		$sql = "SELECT * FROM usuarios WHERE account = '$A' and pass = '$C'";
		$result = $connection->query($sql);

		//validarDatos
      	$count = mysqli_num_rows($result);
      	if($count > 0) //Quiere decir que sí existe
      	{
        	echo'<p id="redirect">redirecting...</p>';
        	$_SESSION['account'] = $A;
      	}
      	else // Quiere decir que no existe
      	{
        	echo'<p id="redirect"></p>';
      	}	
	?>
</body>
</html>
