<?php
//FUNCION ABLIGATORIA PARA INICIO DE SESION
session_start();

// SI LA SESSION ES CORRECTA MUESTRA LOS DATOS
if( isset($_SESSION['admin']) ) {
  echo 'Bienvenido con PHP ' .$_SESSION['admin'];
  echo '<br> <a href="cerrar.php">Cerrar Sesion</a>';

} else {
  header('location:index.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
  </head>
  <body>
    <h1>MENU Administrador</h1>
  </body>
</html>
