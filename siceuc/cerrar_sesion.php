<?php
	session_start();
	$_SESSION['account'] = "";
	$_SESSION['nombre'] = "";
	$_SESSION['password'] = "";
	$_SESSION['email'] = "";
	$_SESSION['archivo'] = "";
	header("Location: index.php");
?>