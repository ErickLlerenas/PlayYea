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
			<li><a href="http://localhost/siceuc/" id="back">Back</a></li>
			<li><a href="https://playyea.com"><img src="../../img/Logo.png" alt="logo" width="50px" height="50px"></a></li>
		</ul>
	</nav>

	<?php

	$Server = 'localhost';
	$User = 'root';
	$Password = 'ucolbach8';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	//seleccionarDatos
	$sql = "SELECT * FROM Materias";
	$result = $connection->query($sql);

	//validarDatos
	if($result == true){ //Si se insertaron datos correctamente
			echo "
					<table>
						<tr>
							<td width='120' class='titulo'>No. Cuenta</td>
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
					
						<tr>
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
				echo "<form method='post' action='insertar.php'>
				<tr>
							<td width='120' class='titulo'><input type='text' name='numCuenta_input' autocomplete='off' id='numCuenta_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='8' minlength='8'></td>

							<td width='120' class='titulo'><input type='text' name='Matematicas_input' autocomplete='off' id='Matematicas_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Fisica_input' autocomplete='off' id='Fisica_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Ingles_input' autocomplete='off' id='Ingles_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Metodologia_input' autocomplete='off' id='Metodologia_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Programacion_input' autocomplete='off' id='Programacion_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Analisis_input' autocomplete='off' id='Analisis_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

							<td width='120' class='titulo'><input type='text' name='Internet_input' autocomplete='off' id='Internet_id' onkeypress='return event.charCode == 46 ||event.charCode >= 48 && event.charCode <= 57' maxlength='3'></td>

						</tr>
				</table>
				<button type='submit' onclick='return validar()'>Insertar</button>
				</form>
				<form method='POST' action='del.php' id='Eliminar'>
					Elimnar calificacion: <input type='text' name='valornumCuenta' placeholder='No. Cuenta' autocomplete='off' onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='8'>
					<button type='submit'>Eliminar</button>
				</form>";
		}
		//cerrarConexion
		mysqli_close($connection);
	?>

</body>
</html>