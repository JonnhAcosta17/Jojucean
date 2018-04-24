<?php


	$mysqli = new mysqli("localhost", "root", "", "ingresodeestudiantes");

	$usuario = $_POST['usuario'];;
	$contrasena = md5($_POST['contrasena']);

	$consulta = "SELECT * FROM usuario WHERE Id_Usuario = ".$usuario." AND Clave_Usuario = '".$contrasena."'";

	$resultado = $mysqli->query($consulta);

	if (@$resultado->num_rows > 0) {
		echo "<script type='text/javascript'>window.location.href='registro.php'</script>";
	}else{
		echo "<script type='text/javascript'>alert('Error en usuario y/o contrasena	')</script>";
		echo "<script type='text/javascript'>window.history.back()</script>";
	}

?>