<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SCE Play Yea</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/Logo.png">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="https://playyea.com"><img src="../img/Logo.png" alt="logo" width="50px" height="50px" id="logo"></a></li>
		</ul>
	</nav>
	<article>
		<a class="menu" href="http://localhost/siceuc/evaluaciones/">Evaluaciones</a>
		<a class="menu" href="http://localhost/siceuc/config/">Configuración</a>
		<a class="menu" href="http://localhost/login/">Cerrar sesión</a>
	</article>
	<div class="info">
		<?php

		$Server = 'localhost';
		$User = 'root';
		$Password = 'ucolbach8';
		$DataBase = 'playyeac_playYeaDB';

		//conectarServidor y base de datos
		$connection = new mysqli($Server,$User,$Password,$DataBase);

		$user="";
		//Seleccionar los datos
		$sql = "SELECT * FROM usuarios";
		$result = $connection->query($sql);

		switch ($user) {
			case 'Angel':
				echo'<img src="img/angel.png" alt="Usuario" name="foto" class="user">';
				echo'<p>20150902</p>';
				echo'<p>Ángel Aguilar</p>';
				echo'<p>Edad: 18 años</p>';
				echo'<p>Promedio: 8.01</p>';
				break;
			
			case 'Erick':
				echo'<img src="img/erick.png" alt="Usuario" name="foto" class="user">';
				echo'<p>20150926</p>';
				echo'<p>Erick Llerenas</p>';
				echo'<p>Edad: 18 años</p>';
				echo'<p>Promedio: 9.0</p>';
				break;

			default:
				echo'<img src="img/default_user.png" alt="Usuario" name="foto" class="user">';
				echo'<p>Num Cuenta</p>';
				echo'<p>Alumno</p>';
				echo'<p>Edad</p>';
				echo'<p>Promedio</p>';
				break;
		}

		if($result == true){ //Si existen datos
			$count = mysqli_num_rows($result);
			//echo $count;
			/*while(*/$row = mysqli_fetch_array($result);//){
			//echo count($row['account']);
			//ifcount($row['account'])
			//}
		}
		?>
	</div>
</body>
</html>