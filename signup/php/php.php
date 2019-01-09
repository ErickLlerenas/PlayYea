<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="js/redirect.js"></script>
	<title>Tabla de Registros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body onload="redirect()">
	<nav>
		<ul>
			<li><a href="https://playyea.com"><img src="../../img/Logo.png" id="logo" alt="logo" width="50px" height="50px"></a></li>
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
		$E = $_POST['input_email'];
		
		//ConectarServidor
		$connection = new mysqli($Server,$User,$Password,$DataBase);
		
		//InsertarDatos
		$sql = "INSERT INTO usuarios (account, pass, fullName, email) VALUES ('$A','$P','$N','$E');";
		$result = $connection->query($sql);	
		
		//ValidarDatos
	    if($result == true) //Quiere decir que sí se insertaron los datos
		{
			$mensaje1 = "Thanks for signing up: ".$N."";
			$mensaje2 = "Account number: ". $A ."";
			$mensaje4 = "Password: ". $P ."";
			$fullMessage = $mensaje1 . "\n\n" . $mensaje2 . "\n\n" . $mensaje4;

			mail($E,"[Play Yea] Accounts",$fullMessage);

			echo "<p class='exito'>We have sent you an Email</p>";

			?>
				<button onclick="window.location='http://playyea.com/login';" id='logInBtn'>Log in</button>
			<?php
		}
		else if($result == false) //Quiere decir que no se insertaron los datos
		{
			echo "<p id='existente' class='exito'>Existing account</p>";
			echo "<p id='exixtente' class='exito'>Try using another username</p>";
		}
		
	?>
</body>
</html>