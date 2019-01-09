<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<script src="redirect.js"></script>
	<title>Tabla de Registros</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body onload="redirect()">
	<?php
		
		$Servidor = 'localhost';
		$Usuario = 'playyeac';
		$Contraseña = 'lechuga150909';
		$BaseDeDatos = 'playyeac_playYeaDB';
		$U = $_POST['input_user'];
		$C = $_POST['input_password'];

		//ConectarServidor
			$connection = new mysqli($Servidor, $Usuario, $Contraseña, $BaseDeDatos) or die ("No se ha podido conectar al servidor de Base de datos");
		
		//InsertarDatos
			$sql = "INSERT INTO usuarios (user, pass) VALUES ('$U','$C');";
			$result = $connection->query($sql);
		
		//ValidarDatos
	      	if($result == TRUE) //Quiere decir que sí se insertaron los datos
			{
				echo'<p class="exito">Cuenta creada con éxito</p>';
				echo'<p class="exito">Usuario: '. $U .'</p>';
				echo'<p class="exito">Contraseña: '. $C .'</p>';
				?>
					<button onclick="window.location='http://playyea.com/login';" id='logInBtn'>Log in</button>
				<?php
			}
			else //Quiere decir que no se insertaron los datos
			{
				echo "<p id='existente'>Cuenta existente</p>";
			}
		
	?>
</body>
</html>