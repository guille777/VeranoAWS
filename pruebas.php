<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pruebas</title>
</head>
<body>
	<?php 
	// include "lib/db.php";
	include "lib/usuario.php";

	$user=new UsuarioDB();
	$resultado=$user->buscarUsuarioInsert();
	foreach ($resultado as $key => $value) {
		echo $value["id_usuario"]."<br>";
		echo $value["usuario"]."<br>";
		echo $value["nombre"]."<br>";
		echo $value["apellidos"]."<br>";
		echo $value["email"]."<br>";
		// echo $value["contraseña"]."<br>";
	}




	 ?>
</body>
</html>