<?php session_start(); header("Location: ".$_SERVER['HTTP_REFERER']);

if( isset($_SESSION['usuario']) ) {


	$id = $_GET['id'];
	$tabla = $_GET['tabla'];
	$imagen = $_GET['imagen'];
	$sql = "delete from $tabla where id = $id";
	

	include("configuracion.php");
	mysqli_query($con, $sql);

	
	if( unlink($carpeta_imagen."/".$imagen) ) {
		echo "Se borró imagen grande<br>";
	}

	if( unlink($carpeta_thumb."/".$imagen) ) {
		echo "Se borró imagen thumbnail<br>";
	}

	if( unlink($carpeta_mini."/".$imagen) ) {
		echo "Se borró imagen miniatura<br>";
	}

	
	
	


} else { include("login.php"); }
?>                                                                                           
