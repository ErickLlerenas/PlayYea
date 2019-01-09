<?php
session_start();

$name = $_SESSION['nombre'];
$pass = $_SESSION['password'];
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Config</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../img/Logo.png">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<script src="guardar.js"></script>
</head>
<body>
	<nav>
		<ul>
			<li><a id="back" href="https://playyea.com/siceuc">Back</a></li>
			<li><a href="https://playyea.com"><img src="../../img/Logo.png" alt="logo" width="50px" height="50px" id="logo"></a></li>
		</ul>
	</nav>
	<div class="editar">
		<h1>Editar información:</h1>
	<?php
	echo'
		<form action="guardar.php" method="post">
			<table class="table">
				<tr>
					<td><p class="right">Nombre:</p></td>
					<td><input class="input" type="text" value="'.$name.'" name="input_name"></td>		
				</tr>

				<tr>
					<td><p class="right">Contraseña:</p></td>
					<td><input class="input" type="text" value="'.$pass.'" name="input_password"></td>
				</tr>

				<tr>
					<td><p class="right">Email:</p></td>
					<td><input class="input" type="text" value="'.$email.'" name="input_email"></td>
				</tr>
			</table>
			<input type="submit" value="Guardar">
		</form>
		<form action="mostrar.php" method="post" enctype="multipart/form-data">
			<div class="fotoBoton">
				<span>Nueva Foto</span>
				<input type="file" name="foto" accept="image/*">
				<input type="submit" value="Cargar">
			</div>
		</form>';
		
		$archivo = $_SESSION['archivo'];
		if($archivo != null){
			echo "<img src='files/".$archivo."' class='imgup'><br>";
			echo "Archivo subido exitosamente!<br>";
		}


		echo '
			<form method="post" action="elminarCuenta.php">
				<input type="submit" value ="ELIMINAR CUENTA" class="eliminar_boton" onclick="return seguro()">
			</form>
			';
	?>
	</div>
	<script>
		function seguro(){
			if(confirm("¿Estas seguro de que deseas eliminar tu cuenta?"))
			{
				return true;
			}else {
				return false;
			}
		}
	</script>
</body>
</html>