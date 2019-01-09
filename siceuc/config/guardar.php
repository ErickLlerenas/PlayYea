<?php
	
	session_start();
	$Server = "localhost";
	$User = "playyeac";
	$Password = "lechuga150909";
	$DataBase = 'playyeac_playYeaDB';
	$archivo = $_SESSION['archivo'];
	$account = $_SESSION['account'];

	$Connect = new mysqli($Server,$User,$Password,$DataBase);

	//Insertar los datos de la foto en la tabla FOTO
	if($archivo != null)
	{
		$sql2 = "SELECT * FROM Foto WHERE usuario = '$account'";
		$result2 = $Connect->query($sql2);
		$count = mysqli_num_rows($result2);
	
		if($count > 0)
		{
			$UPDATE = "UPDATE Foto SET archivo = '$archivo' WHERE usuario = '$account'";
			$RESULTUPDATE = $Connect->query($UPDATE);
		}else
		{
			$SQL = "INSERT INTO Foto (usuario, archivo) VALUES ('$account','$archivo')";
			$RESULT = $Connect->query($SQL);
		}
		

		

	}
	
	//Actualizar los datos de el usuario

	$name = $_POST['input_name'];
	$pass = $_POST['input_password'];
	$email = $_POST['input_email'];

	$SQL2 = "UPDATE usuarios SET fullName = '$name', pass = '$pass', email = '$email' WHERE account = '$account'";
	$RESULT2 = $Connect->query($SQL2);

	header("Location: ../");
	
?>