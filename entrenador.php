<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Privado Entrenador</title>
</head>
<body>
<?php
// INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellidos`, `email`, `pass`, `rol`) VALUES (NULL, 'mou', 'jose', 'mourino', 'mmj@k.com', '1234', 'entrenador');
include "lib/usuario.php";
include "./lib/seguridad.php";
	$user=new UsuarioBD();
	$seguridad=new Seguridad();
	  if($seguridad->getUsuario()!=null && $seguridad->getRol()=="entrenador"){
	   echo "hola entrenador: ".$seguridad->getUsuario();
	   echo "<br><a href='index.php'>Home</a>";
		}else{
			echo "creo que no eres entrenador";
		}
		//lo siguiente trabajar con las 



 ?>

</body>
</html>
