<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Evaluaciones</title>
	<link rel="shortcut icon" href="../img/Logo.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="http://localhost/project/siceuc/" id="back">Back</a></li>
			<li><a href="https://playyea.com"><img src="../img/Logo.png" id="logo" alt="logo" width="50px" height="50px"></a></li>
		</ul>
	</nav>

	<?php

	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	//seleccionarDatos
	$sql = "SELECT * FROM materias";
	$result = $connection->query($sql);

	//validarDatos
	if($result == true){ //Si se insertaron datos correctamente
			echo "
					<table>
						<tr id='materias'>
							<td width='120' class='titulo'>Num Cuenta</td>
							<td width='120' class='titulo'>Matemáticas</td>
							<td width='120' class='titulo'>Física</td>
							<td width='120' class='titulo'>Inglés</td>
							<td width='120' class='titulo'>Metodología</td>
							<td width='120' class='titulo'>Programación</td>
							<td width='120' class='titulo'>Análisis</td>
							<td width='120' class='titulo'>Internet</td>

						</tr>
					";
			while($row = mysqli_fetch_array($result)){ //Imprimir todos los campos de la tabla
				echo "
					
						<tr id='calDB'>
							<td width='120'>".$row['numCuenta']."</td>
							<td width='120'>".$row['Matematicas']."</td>
							<td width='120'>".$row['Fisica']."</td>
							<td width='120'>".$row['Ingles']."</td>
							<td width='120'>".$row['Metodologia']."</td>
							<td width='120'>".$row['Programacion']."</td>
							<td width='120'>".$row['Analisis']."</td>
							<td width='120'>".$row['Internet']."</td>
						</tr>
					";
			}
				echo "<form method='post' action='save.php'>
						<tr id='addCal'>
							<td width='120' class='titulo'><input type='text' name='numCuenta_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Matematicas_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Fisica_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Ingles_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Metodologia_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Programacion_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Analisis_input' autocomplete='off'></td>
							<td width='120' class='titulo'><input type='text' name='Internet_input' autocomplete='off'></td>

						</tr>
				</table>
				<button type='submit' id='insert'>Insertar</button>
				</form>
				<form method='POST' action='del.php' id='del'>
					Elimnar calificacion: <input type='text' name='valornumCuenta' autocomplete='off'>
					<button type='submit'>Eliminar</button>
				</form>";
		}
		//cerrarConexion
		mysqli_close($connection);
	?>

</body>
</html>