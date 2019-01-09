<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="redirect.js"></script>
	<title>Tabla de Registros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
</head>
<body onload="redirect()">
	<nav>
		<ul>
			<li><a href="https://playyea.com"><img src="../img/Logo.png" id="logo" alt="logo" width="50px" height="50px"></a></li>
		</ul>
	</nav>
	
	<?php
		
		$Server = 'localhost';
		$User = 'playyeac';
		$Password = 'lechuga150909';
		$DataBase = 'playyeac_playYeaDB';
		$A = $_POST['input_account'];
		$P = $_POST['input_password'];
		$N = $_POST['input_name'];
		
		//ConectarServidor
		$connection = new mysqli($Server,$User,$Password,$DataBase);
		
		//InsertarDatos
		$sql = "INSERT INTO usuarios (account, pass, fullName) VALUES ('$A','$P','$N');";
		$result = $connection->query($sql);
		
		//ValidarDatos
	    if($result == TRUE) //Quiere decir que sí se insertaron los datos
		{
			echo'<p class="exito">Account created successfully!</p>';
			echo '<br>';
			echo'<p class="exito">Account number: '. $A . '</p>';
			echo'<p class="exito">Password: '. $P .'</p>';
			echo'<p class="exito">Full name: '. $N . '</p>';
			?>
				<button onclick="window.location='http://playyea.com/login';" id='logInBtn'>Log in</button>
			<?php
		}
		else //Quiere decir que no se insertaron los datos
		{
			echo "<p id='existente'>Existing account</p>";
			echo "<p id='exixtente'>Try using another username</p>";
		}
		
	?>
</body>
</html>