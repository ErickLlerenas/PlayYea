<?php
session_start();
$account = $_SESSION['account'];
$name = $_SESSION['nombre'];
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

	$Server = 'localhost';
	$User = 'playyeac';
	$Password = 'lechuga150909';
	$DataBase = 'playyeac_playYeaDB';

	//conectarServidor y base de datos
	$connection = new mysqli($Server,$User,$Password,$DataBase);

	//seleccionarDatos Primera Parcial
	$sql = "SELECT * FROM Primera WHERE numCuenta = '$account'";
	$result = $connection->query($sql);

	//seleccionarDatos Segunda Parcial
	$sql2 = "SELECT * FROM Segunda WHERE numCuenta = '$account'";
	$result2 = $connection->query($sql2);

	//SeleccionarDatos Tercera Parcial
	$sql3 = "SELECT * FROM Tercera WHERE numCuenta = '$account'";
	$result3 = $connection->query($sql3);
	//validarDatos Si es alumno
	if($account != 10203040){
					
		$row = mysqli_fetch_array($result); 
		$row2 = mysqli_fetch_array($result2);
		$row3 = mysqli_fetch_array($result3);

		//ACREDITAR CULTURALES Y SERVICIO DE LA PRIMERA PARCIAL
		if($row['Culturales'] + $row2['Culturales'] + $row3['Culturales'] < 12){ 
			$CUL = "NA";
		}else
		{
			$CUL = "AC";
		}

		if($row['Servicio'] + $row2['Servicio'] + $row3['Servicio'] >= 50){
			$SER = "AC";
		}else
		{
			$SER = "NA";
		}

		//ACREDITAR CULTURALES Y SERVICIO DE LA SEGUNDA PARCIAL
		if($row['Culturales'] + $row2['Culturales'] + $row3['Culturales'] < 24){
			$CUL2 = "NA";
		}else
		{
			$CUL2 = "AC";
		}

		if($row['Servicio'] + $row2['Servicio'] + $row3['Servicio'] >= 50){
			$SER2 = "AC";
		}else
		{
			$SER2 = "NA";
		}

		//ACREDITAR CULTURALES Y SERVICIO DE LA TERCERA PARCIAL
		if($row['Culturales'] + $row2['Culturales'] + $row3['Culturales'] < 32){ 
			$CUL3 = "NA";
			$ordiCUL = "NA";
		}else
		{
			$CUL3 = "AC";
			$ordiCUL = "-";
		}

		if($row['Servicio'] + $row2['Servicio'] + $row3['Servicio'] >= 50){
			$SER3 = "AC";
			$ordiSER = "-";
		}else
		{
			$SER3 = "NA";
			$ordiSER = "NA";
		}

		//CONTAR HORAS CULTURALES
		$horas = $row['Culturales'] + $row2['Culturales'] + $row3['Culturales'];

		//SUMAR CALIFICACIONES PARA VER SI SE FUE A ORDI O NO

		//MATEMATICAS
		if($row['Matematicas'] + $row2['Matematicas'] + $row3['Matematicas'] < 24){
			$valorMatematicas = 0;
			$valorfinalMatematicasDecimal = 0;
		}else
		{
			$valorMatematicas ='-';
			$valorfinalMatematicas = ($row['Matematicas'] + $row2['Matematicas'] + $row3['Matematicas'])/3;
			$valorfinalMatematicasDecimal = number_format($valorfinalMatematicas,1,'.','');
		}

		//FISICA
		if($row['Fisica'] + $row2['Fisica'] + $row3['Fisica'] < 24){
			$valorFisica = 0;
			$valorfinalFisicaDecimal = 0;
		}else
		{
			$valorFisica ='-';
			$valorfinalFisica = ($row['Fisica'] + $row2['Fisica'] + $row3['Fisica']) / 3;
			$valorfinalFisicaDecimal = number_format($valorfinalFisica,1,'.','');
		}

		//INGLES
		if($row['Ingles'] + $row2['Ingles'] + $row3['Ingles'] < 24){
			$valorIngles = 0;
			$valorfinalInglesDecimal = 0;
		}else
		{
			$valorIngles ='-';
			$valorfinalIngles = ($row['Ingles'] + $row2['Ingles'] + $row3['Ingles']) / 3;
			$valorfinalInglesDecimal = number_format($valorfinalIngles,1,'.','');
		}

		//METODOLOGIA
		if($row['Metodologia'] + $row2['Metodologia'] + $row3['Metodologia'] < 24){
			$valorMetodologia = 0;
			$valorfinalMetodologiaDecimal = 0;
		}else
		{
			$valorMetodologia ='-';
			$valorfinalMetodologia = ($row['Metodologia'] + $row2['Metodologia'] + $row3['Metodologia']) / 3;
			$valorfinalMetodologiaDecimal = number_format($valorfinalMetodologia,1,'.','');
		}

		//PRORGAMACION
		if($row['Programacion'] + $row2['Programacion'] + $row3['Programacion'] < 24){
			$valorProgramacion = 0;
			$valorfinalProgramacionDecimal = 0;
		}else
		{
			$valorProgramacion ='-';
			$valorfinalProgramacion = ($row['Programacion'] + $row2['Programacion'] + $row3['Programacion'])/3;
			$valorfinalProgramacionDecimal = number_format($valorfinalProgramacion,1,'.','');
		}

		//ANALISIS
		if($row['Analisis'] + $row2['Analisis'] + $row3['Analisis'] < 24){
			$valorAnalisis = 0;
			$valorfinalAnalisisDecimal = 0;
		}else
		{
			$valorAnalisis ='-';
			$valorfinalAnalisis = ($row['Analisis'] + $row2['Analisis'] + $row3['Analisis']) /3;
			$valorfinalAnalisisDecimal = number_format($valorfinalAnalisis,1,'.','');
		}

		//INTERNET
		if($row['Internet'] + $row2['Internet'] + $row3['Internet'] < 24){
			$valorInternet = 0;
			$valorfinalInternetDecimal = 0;
		}else
		{
			$valorInternet ='-';
			$valorfinalInternet = ($row['Internet'] + $row2['Internet'] + $row3['Internet']) / 3;
			$valorfinalInternetDecimal = number_format($valorfinalInternet,1,'.','');
		}

			echo "<p style='font-size: 1.5em;'>".$name."";
			//TABLA
			echo "
			<table>
				<tr class='titulos'>
					<td class='titulo'>MATERIA</td>
					<td>1°ra</td>
					<td>2°da</td>
					<td>3°ra</td>
					<td>Ordi</td>
					<td>Final</td>
				</tr>
				<tr class='color_x'>
					<td class='titulo'>Matemáticas</td>
					<td>".$row['Matematicas']."</td>
					<td>".$row2['Matematicas']."</td>
					<td>".$row3['Matematicas']."</td>
					<td>".$valorMatematicas."</td>
					<td>".$valorfinalMatematicasDecimal."</td>
				</tr>
				<tr class='color_y'>
					<td class='titulo'>Física</td>
					<td>".$row['Fisica']."</td>
					<td>".$row2['Fisica']."</td>
					<td>".$row3['Fisica']."</td>
					<td>".$valorFisica."</td>
					<td>".$valorfinalFisicaDecimal."</td>
				</tr>
				<tr class='color_x'>
					<td class='titulo'>Inglés</td>
					<td>".$row['Ingles']."</td>
					<td>".$row2['Ingles']."</td>
					<td>".$row3['Ingles']."</td>
					<td>".$valorIngles."</td>
					<td>".$valorfinalInglesDecimal."</td>
				</tr>
				<tr class='color_y'>
					<td class='titulo'>Metodología</td>
					<td>".$row['Metodologia']."</td>
					<td>".$row2['Metodologia']."</td>
					<td>".$row3['Metodologia']."</td>
					<td>".$valorMetodologia."</td>
					<td>".$valorfinalMetodologiaDecimal."</td>
				</tr>
				<tr class='color_x'>
					<td class='titulo'>Programación</td>
					<td>".$row['Programacion']."</td>
					<td>".$row2['Programacion']."</td>
					<td>".$row3['Programacion']."</td>
					<td>".$valorProgramacion."</td>
					<td>".$valorfinalProgramacionDecimal."</td>
				</tr>
				<tr class='color_y'>
					<td class='titulo'>Análisis</td>
					<td>".$row['Analisis']."</td>
					<td>".$row2['Analisis']."</td>
					<td>".$row3['Analisis']."</td>
					<td>".$valorAnalisis."</td>
					<td>".$valorfinalAnalisisDecimal."</td>
				</tr>
				<tr class='color_x'>
					<td class='titulo'>Internet</td>
					<td>".$row['Internet']."</td>
					<td>".$row2['Internet']."</td>
					<td>".$row3['Internet']."</td>
					<td>".$valorInternet."</td>
					<td>".$valorfinalInternetDecimal."</td>
				</tr>
				<tr class='color_y'>
					<td class='titulo'>Culturales y deportivas</td>
					<td>".$CUL."</td>
					<td>".$CUL2."</td>
					<td>".$CUL3."</td>
					<td>".$ordiCUL."</td>
					<td>".$CUL3."</td>
				</tr>
				<tr class='color_x'>
					<td class='titulo'>Servicio Social</td>
					<td>".$SER."</td>
					<td>".$SER2."</td>
					<td>".$SER3."</td>
					<td>".$ordiSER."</td>
					<td>".$SER3."</td>
				</tr>

				</table>
				";
				//MENSAJE DE HORAS
				if($horas < 32)
				{
					echo "<p style='color: white; background: green; padding: 5px; margin:50px 0px 0px'>Horas Culturales y Deportivas: ".$horas."</p>";
					echo "<p style='color: white; background: green; padding: 5px; margin:0'>Horas Culturales y Deportivas Restantes: <span style='color: red'>".(32-$horas)."</span></p>";
				}
				else
				{
					echo "<p style='color: white; background: green; padding: 5px; margin:0'>Horas Culturales y Deportivas: ".$horas."</p>";
				}
				


				
	}else //AQUÍ EMPIEZA EL MODO PROFESOR
	{	
		//ALUMNOS REGISTRADOS (USUARIO Y NOMBRE)
		$sqlU = "SELECT * FROM usuarios";
		$resultU = $connection->query($sqlU);

		echo" 
			<div class='Alumnos_registrados'>
				<p style='font-size: 1.8em;'>Alumnos Registrados</p> 

				<table>
					<tr>
						<td class='td_cuenta'>No. Cuenta</td>
						<td class='td_cuenta'>Nombre Completo</td>
					</tr>

		";
		while ($rowU = mysqli_fetch_array($resultU)) {
			if($rowU['account']!= 10203040){

			echo"
			<tr>
				<td class='td_nombre color'>".$rowU['account']."</td>
				<td class='td_nombre'>".$rowU['fullName']."</td>
			</tr>
			";
			}
		}
				echo"</table>
			</div>";


		//PRIMERA PARCIAL (PROFESOR)
		$sql = "SELECT * FROM Primera";
		$result = $connection->query($sql);

		echo "
		<div class='primera'>
		<p class='tabla_title'>Evaluaciones de la primera parcial</p>";

		//1.- MOSTRAR TODOS LAS CALIFICACIONES DE LOS ALUMNOS
		echo"
			<table>
				<tr class='titulos'>
					<td class='titulo'>No. Cuenta</td>
					<td>Matemáticas</td>
					<td>Física</td>
					<td>Inglés</td>
					<td>Metodología</td>
					<td>Programación</td>
					<td>Análisis</td>
					<td>Internet</td>
					<td>Culturales y Deportivas</td>
					<td>Servicio Social</td>
				</tr>
		";
		
		while($row = mysqli_fetch_array($result))
		{
			echo"
				<tr>
					<td>".$row['numCuenta']."</td>
					<td><input type='text' value='".$row['Matematicas']."'</td>
					<td><input type='text' value='".$row['Fisica']."'</td>
					<td><input type='text' value='".$row['Ingles']."'</td>
					<td><input type='text' value='".$row['Metodologia']."'</td>
					<td><input type='text' value='".$row['Programacion']."'</td>
					<td><input type='text' value='".$row['Analisis']."'</td>
					<td><input type='text' value='".$row['Internet']."'</td>
					<td><input type='text' value='".$row['Culturales']."'</td>
					<td><input type='text' value='".$row['Servicio']."'</td>
				<tr>
			";
		}
		//2.-INSERTAR CALIFICACIONES
		echo"
			<form method='POST' action='insertar.php'>
				<tr>
					<td><input type='text' name='numCuenta_input' id='numCuenta_id' required minlength='8' maxlength='8' onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Matematicas_input' id='Matematicas_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Fisica_input' id='Fisica_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Ingles_input' id='Ingles_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Metodologia_input' id='Metodologia_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Programacion_input' id='Programacion_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Analisis_input' id='Analisis_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Internet_input' id='Internet_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Culturales_input' id='Culturales_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>

					<td><input type='text' name='Servicio_input' id='Servicio_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>
				</tr>

			</table>
				<input type='submit' value='Insertar Calificación' onclick='return validar()'>
			</form>
		";
		//EDITAR CALIFICACIONES
			echo "<button onclick='abrirEditar()'>Editar Calificación</button>";

		//BORRAR CALIFICACIONES 
		echo'
			<form method="post" action="del.php">
				<input type="text" placeholder="No. Cuenta" name="num_Cuenta" required minlength="8" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
				<input type="submit" value="Borrar Calificación" >
			</form>
			</div>
			';
		//SEGUNDA PARCIAL(PROFESOR)

		$sql = "SELECT * FROM Segunda";
		$result = $connection->query($sql);

		echo "
		<div class='segunda'>
		<p class='tabla_title'>Evaluaciones de la segunda parcial</p>";

		//1.- MOSTRAR TODOS LAS CALIFICACIONES DE LOS ALUMNOS
		echo"
			<table>
				<tr class='titulos'>
					<td class='titulo'>No. Cuenta</td>
					<td>Matemáticas</td>
					<td>Física</td>
					<td>Inglés</td>
					<td>Metodología</td>
					<td>Programación</td>
					<td>Análisis</td>
					<td>Internet</td>
					<td>Culturales y Deportivas</td>
					<td>Servicio Social</td>
				</tr>
		";
		
		while($row = mysqli_fetch_array($result))
		{
			echo"
				<tr>
					<td>".$row['numCuenta']."</td>
					<td><input type='text' value='".$row['Matematicas']."'</td>
					<td><input type='text' value='".$row['Fisica']."'</td>
					<td><input type='text' value='".$row['Ingles']."'</td>
					<td><input type='text' value='".$row['Metodologia']."'</td>
					<td><input type='text' value='".$row['Programacion']."'</td>
					<td><input type='text' value='".$row['Analisis']."'</td>
					<td><input type='text' value='".$row['Internet']."'</td>
					<td><input type='text' value='".$row['Culturales']."'</td>
					<td><input type='text' value='".$row['Servicio']."'</td>
				<tr>
			";
		}
		//2.-INSERTAR CALIFICACIONES
		echo"
			<form method='POST' action='insertarsegunda.php'>
				<tr>
					<td><input type='text' name='numCuenta_input' id='numCuenta_id' required minlength='8' maxlength='8' onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Matematicas_input' id='Matematicas_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Fisica_input' id='Fisica_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Ingles_input' id='Ingles_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Metodologia_input' id='Metodologia_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Programacion_input' id='Programacion_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Analisis_input' id='Analisis_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Internet_input' id='Internet_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Culturales_input' id='Culturales_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>

					<td><input type='text' name='Servicio_input' id='Servicio_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>
				</tr>

			</table>
				<input type='submit' value='Insertar Calificación' onclick='return validar()'>
			</form>

		";
		//EDITAR CALIFICACIONES
			echo "<button onclick='abrirEditar2()'>Editar Calificación</button>";

		//BORRAR CALIFICACIONES 
		echo'
			<form method="post" action="delSegunda.php">
				<input type="text" placeholder="No. Cuenta" name="num_Cuenta" required minlength="8" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
				<input type="submit" value="Borrar Calificación" >
			</form>
			</div>
			';

		//TERCERA PARCIAL(PROFESOR)

		$sql = "SELECT * FROM Tercera";
		$result = $connection->query($sql);

		echo "
		<div class='tercera'>
		<p class='tabla_title'>Evaluaciones de la Tercera parcial</p>";

		//1.- MOSTRAR TODOS LAS CALIFICACIONES DE LOS ALUMNOS
		echo"
			<table>
				<tr class='titulos'>
					<td class='titulo'>No. Cuenta</td>
					<td>Matemáticas</td>
					<td>Física</td>
					<td>Inglés</td>
					<td>Metodología</td>
					<td>Programación</td>
					<td>Análisis</td>
					<td>Internet</td>
					<td>Culturales y Deportivas</td>
					<td>Servicio Social</td>
				</tr>
		";
		
		while($row = mysqli_fetch_array($result))
		{
			echo"
				<tr>
					<td>".$row['numCuenta']."</td>
					<td><input type='text' value='".$row['Matematicas']."'</td>
					<td><input type='text' value='".$row['Fisica']."'</td>
					<td><input type='text' value='".$row['Ingles']."'</td>
					<td><input type='text' value='".$row['Metodologia']."'</td>
					<td><input type='text' value='".$row['Programacion']."'</td>
					<td><input type='text' value='".$row['Analisis']."'</td>
					<td><input type='text' value='".$row['Internet']."'</td>
					<td><input type='text' value='".$row['Culturales']."'</td>
					<td><input type='text' value='".$row['Servicio']."'</td>
				<tr>
			";
		}
		//2.-INSERTAR CALIFICACIONES
		echo"
			<form method='POST' action='insertartercera.php'>
				<tr>
					<td><input type='text' name='numCuenta_input' id='numCuenta_id' required minlength='8' maxlength='8' onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Matematicas_input' id='Matematicas_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Fisica_input' id='Fisica_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Ingles_input' id='Ingles_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Metodologia_input' id='Metodologia_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Programacion_input' id='Programacion_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Analisis_input' id='Analisis_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Internet_input' id='Internet_id' required maxlength='3' onkeypress='return event.charCode == 46 || event.charCode >= 48 && event.charCode <= 57'></td>

					<td><input type='text' name='Culturales_input' id='Culturales_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>

					<td><input type='text' name='Servicio_input' id='Servicio_id' required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='2'></td>
				</tr>

			</table>
				<input type='submit' value='Insertar Calificación' onclick='return validar()'>
			</form>

		";
		//EDITAR CALIFICACIONES
			echo "<button onclick='abrirEditar3()'>Editar Calificación</button>";
		//BORRAR CALIFICACIONES 
		echo'
			<form method="post" action="delTercera.php">
				<input type="text" placeholder="No. Cuenta" name="num_Cuenta" required minlength="8" maxlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
				<input type="submit" value="Borrar Calificación" >
			</form>
			</div>
			';
	}
	?>
</body>
</html>