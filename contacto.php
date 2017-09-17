<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<style>
		body{background-color: grey;}
		h1, h2{color: #800000;text-align: center;}
		form{text-align: center;background-color: white;}
		a{color: white;}
	</style>
</head>
<body>
<h1>Contactanos :</h1>
<p><b><img src="img/fcb.png" alt="Facebook" height="42" width="42">  Escríbenos un mensaje directo a nuestro perfil de Facebook: </b><a href="#facebook.com/rapid-murillo.ES">facebook.com/rapid-murillo.ES</a></p>
<!-- <br> -->
<p><b><img src="img/twitter.png" alt="twitter" height="42" width="42">  O a nuestro perfil de Twitter:</b><a href="#@Rapid-Murillo">Rapid-Murillo</a></p>
<br><br>
<h2>También puedes enviarnos tu consulta a través de este formulario:</h2>
	<form action="#a.php" method="post">
		<fieldset>
			<legend>Contacto</legend>
				<label>Tema de la consulta</label>
					<select>
					  <option>Elige Una</option>
					  <option value="tienda">Tienda</option>
					  <option value="club">Club</option>
					  <option value="jug">Jugadores</option>
					</select><br><br>
	            <label>Nombre: </label>
							<input type="text"><br><br>
	            <label>Correo: </label>
							<input type="email"><br><br>
	            <label>Telefono: </label>
							<input type="telefono"><br><br>
	            <label>Consulta: </label>
							<input type="textarea"><br><br>
	            <!--He leído y acepto la Política de Privacidad y las Condiciones de uso  -->
	            <input type="submit" value="enviar">
		</fieldset>
	</form>
	<a href="index.php">Home</a>
</body>
</html>
