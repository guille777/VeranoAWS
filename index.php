<?php
//COMENTADO includes parte php llama a la clase usuario,seguridad,otras etc
include "lib/usuario.php";
$user=new UsuarioBD();
include "lib/seguridad.php";
$seguridad = new Seguridad();
// include "lib/clases.php";
// $clase= new Clases();
// include "lib/libros.php";
// $libro= new Libros();
// include "lib/electronica.php";
// $elec= new Electronica();

//Proyecto para gestor: realizar toda la parte de login y registro, apartado bases de datos para usuarios y jugadores-club, incorporar
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Index página gestor de futbol sala</title>
  <link rel="stylesheet" href="./css/test.css">
  <!-- <script src="js/jquery-1.9.1.min.js"></script> -->
</head>
<body>
  <section class="nav">
    <nav>
      <ul>
        <li><a href="equipos.php">Equipos</a></li>
        <li><a href="club.php">Club</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="tienda.php">Tienda</a></li>
        <?php
        if($seguridad->getUsuario()==null){
              echo "<a href='login.php'>Login</a>";
        }else {
          echo "hola ".$seguridad->getUsuario();
          $ip = $_SERVER['REMOTE_ADDR'];
          echo ", la ip suya es".$ip;
        }
        ?>
        <!-- <a href="login.php">Login</a> -->
        <!-- <li><a href="jugador.php">jugadores</a></li> -->
      </ul>
    </nav>
  </section>

    <header>
      <img src="img/logo.gif" alt="">
      <h1>C.F. RAPID MURILLO</h1>
    </header>
    <!--    <section id="main-content">
      <h1>Contenido Principal</h1>
      <div id="search-content">
        <p>¿Buscador?</p>
      </div>

      <div id="favorites">
        <p>Favoritos</p>
      </div>

      <aside>
       <h1>Lateral</h1>
        <p><a href="#">www.as.com</a></p>
      </aside>
    </section> -->
    <section id="main2">
      <h1>Noticias :</h1>
      <p><a STYLE="font-size:18px; font-family:arial; color:white" href="http://www.elroubio.net/?p=adopt_an_elephpant">Ejemplo de pagina muy limpia VENTAS, otro proyecto</a></p>
    </section>

    <section id="main3">
      <img src="img/uno.png" alt="">
      <img src="img/dos.jpg" alt="">
      <img src="img/tres.jpg" alt="">
    </section>






 <footer>
      <h1>Footer</h1>
      <h3><p>Guillermo Barberá</p></h3>
    </footer>
</body>
</html>
