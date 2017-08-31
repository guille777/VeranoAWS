<?php
//COMENTADO includes parte php llama a la clase usuario,seguridad,otras etc
// include "lib/usuario.php";
// $user=new usuario();
// include "lib/seguridad.php";
// $seguridad = new Seguridad();

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
        <li><a href="equipos.php">Partidos</a></li>
        <li><a href="club.php">Club</a></li>
        <li><a href="noticias.php">Noticias</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="tienda.php">Tienda</a></li>
        <a href="login.php">Inicia Sesion</a>
        <a href="registro.php">Registrate</a>
        <li><a href="jugador.php">jugadores</a></li>
      </ul>
    </nav>
  </section>

    <header>
    <img src="img/logo.gif" alt="">
      <h1>C.F. RAPID MURILLO</h1>
      <p>Logo y Nombre</p>

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
      <h1>Noticias</h1>
    </section>
<!-- <h1>BODY fuera de cajas</h1> -->
 <footer>
      <h1>Footer</h1>
      <h3><p>Guillermo Barberá</p></h3>
    </footer>
</body>
</html>
