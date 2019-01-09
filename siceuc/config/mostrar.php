<?php
session_start();

$account = $_SESSION['account'];
$archivo = $_FILES['foto']['tmp_name'];
$destino = "files/".$carpeta.$_FILES['foto']['name'];

$subir = move_uploaded_file($archivo,$destino);
if($subir){
	$nombre = $_FILES['foto']['name'];
	$_SESSION['archivo'] = $nombre; 
}
	header("Location: index.php");
?>