<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jug</title>
</head>
<body>
<?php 
if (isset($_POST["accion"])) {
	include "lib/jug.php";
	$jug=new Jugador();
	if ($_POST["accion"]=="insertar") {
		if (!empty($_POST["nombre"]) && !empty($_POST["posicion"]) && !empty($_POST["numero"])) {
			$resultado=$jug->insertarJugador($_POST["nombre"],$_POST["posicion"],$_POST["numero"]);
			    if($resultado!=null){
              		echo "<h2 class='succes'>registro correcto</h2></br>";
              		$resultado=$user->mostrarJug();
                	foreach ($resultado as $key => $fila) {
                 		echo "nombre : ".$fila["nombre"]."<br>";
                  		echo "posicion: ".$fila["posicion"]."<br>";
                  		echo "numero : ".$fila["numero"]."<br>";
                	}
            		//no me muestra la informacion insertada porque me redirecciona a index.....+++                
            		// header('Location: index.php');          
            	}
            	else{
            	echo "jugador no registrado";
            	}
		}
	}
}




 ?>
<form action="jugador.php" method="post">
<h1>Inserta un jugador</h1>
	<input type="text" name="nombre" value="" placeholder="nombre" required=""><br><br>
	<input type="text" name="posicion" value="" placeholder="posicion" required=""><br><br>	
	<input type="text" name="numero" value="" placeholder="numero" required=""><br><br>

	<input type="hidden" name="accion" value="insertar">
	<input type="submit" name="" value="insertar">
</form>
	
</body>
</html>