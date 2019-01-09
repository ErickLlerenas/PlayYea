<?php
session_start();
$archivo = $_SESSION['archivo'];
?>
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
		<a class="menu" href="https://playyea.com/siceuc/evaluaciones/">Evaluaciones</a>
		<a class="menu" href="https://playyea.com/siceuc/config/">Configuración</a>
		<a class="menu" href="https://playyea.com/siceuc/cerrar_sesion.php">Cerrar sesión</a>
	</article>
	<div class="info">
		
		<?php
	
		$Server = 'localhost';
		$User = 'playyeac';
		$Password = 'lechuga150909';
		$DataBase = 'playyeac_playYeaDB';
		$account = $_SESSION['account'];

		//conectarServidor y base de datos
		$connection = new mysqli($Server,$User,$Password,$DataBase);

		//Seleccionar datos de la tabla FOTO
		$sql2 = "SELECT * FROM Foto WHERE usuario = '$account'";
		$result2 = $connection->query($sql2);
		$count = mysqli_num_rows($result2);
		if($count > 0)
		{
			$row2 = mysqli_fetch_array($result2);
			$archivo = $row2['archivo'];
			
			echo '<img src="config/files/'.$archivo.'" alt="Usuarioimg" class="user">';

		}else
		{
			echo '<img src="../img/user.png" alt="Usuario" class="user">';
		}

		//Seleccionar los datos
		$sql = "SELECT * FROM usuarios WHERE account = '$account'";
		$result = $connection->query($sql);

		if($result == TRUE){ //Si existen datos
			
			$row = mysqli_fetch_array($result);
			echo '<p id="redirect">' . $row['account'] . '</p>';//Mostrar número de cuenta
			echo $row['fullName'];//Mostrar Nombre completo

			//Guardar variables en SESSION
			$_SESSION['nombre'] = $row['fullName'];
			$_SESSION['password'] = $row['pass'];
			$_SESSION['email'] = $row['email'];
		}

		?>
	</div>
	<script>
		if(document.getElementById('redirect').innerText == ""){
			setTimeout("location.href='http://playyea.com/login/'", 0);
		}
	</script>
</body>
</html>