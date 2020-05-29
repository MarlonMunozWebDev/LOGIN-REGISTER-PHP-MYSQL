<?php
//FUNCION ABLIGATORIA PARA INICIO DE SESION
session_start();

// SI LA SESSION ES CORRECTA MUESTRA LOS DATOS
if( isset($_SESSION['usuario']) ) {
  //echo 'Bienvenido con PHP ' .$_SESSION['usuario'];
  //echo '<br> <a href="cerrar.php">Cerrar Sesion</a>';

} else {
  header('location:registro.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>USUARIO</title>

    <nav class="navbar navbar-light bg-primary text-white justify-content-between">
      <a href="cerrar.php" class="text-white md-0 h3">Cerrar Sesion</a>

      <form class="form-inline">
        <h1>Bienvenido: <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario']: 'Invitado' ?></h1>
      </form>
    </nav>

    <h2>MENU USUARIO</h2>
  </head>
  <body>


  </body>
</html>
