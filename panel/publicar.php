<?php session_start(); header("Location: ".$_SERVER['HTTP_REFERER']);

if(isset($_SESSION['usuario'])) {

	$id = $_GET['id'];
	$tabla = $_GET['tabla'];
	$publico = $_GET['publico'];

	if($publico==0) {
		$sql = "update $tabla set publico=1 where id = $id";
	}

	else {
		$sql = "update $tabla set publico=0 where id = $id";
	}

	include("configuracion.php");
	mysqli_query($con, $sql);

} else { 
	include("login.php");
}
?>