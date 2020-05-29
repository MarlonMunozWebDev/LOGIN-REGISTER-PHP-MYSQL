<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LOGIN</title>
  </head>
  <body>


    <!--PONEMOS UNA CONDICION DE LINEA (?) PARA QUE SI HAY UNA SESION INICIADA MUESTRE EL NOMBRE-->
    <!--IMPRIMIRMOS SI EL ISSET DA VERDADERO EL NOMBRE ALMACENADO EN LA VARIABLE SESSION-->

    <nav class="navbar navbar-light bg-primary text-white justify-content-between">
      <a href="registro.php" class="text-white md-0 h3">Iniciar Sesion</a>

      <form class="form-inline">
        <h1>Bienvenido: <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario']: 'Invitado' ?></h1>
      </form>
    </nav>
  </body>
</html>
