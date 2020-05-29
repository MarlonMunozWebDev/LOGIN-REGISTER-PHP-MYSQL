<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRO DE USUARIOS</title>
  </head>
  <body>

    <div class="imagen">
      <div class="imagen-efecto">
        <h2>Registro</h2>
      </div>
    </div>

    <div class="formulario">
      <!--MUY IMPORTANTE EL METODO POST PÓRQUE MANEJAMOS DATOS IMPORTANTES-->
      <h3>Registrate</h3>
      <form class="" action="agregar_usuario.php" method="POST">
        <p>NOMBRE</p>
        <input type="text" name="nombre_usuario" placeholder="Ingresa Usuario">

        <p>CONTRASEÑA</p>
        <input type="text" name="contrasena" placeholder="Ingresa Contraseña">

        <p>REPITE TU CONTRASEÑA</p>
        <input type="text" name="contrasena_coincidencia" placeholder="Repite tu Contraseña">
        <button type="submit">Registrame</button> <a href="iniciar_sesion.php">Iniciar Sesion</a>
    </form>

    <!--<h3>Login</h3>
    <form class="" action="login.php" method="POST">
      <input type="text" name="nombre_usuario" placeholder="Ingresa tu Usuario">
      <input type="text" name="contrasena" placeholder="Ingresa tu Contraseña">
      <button type="submit">Guardar</button>
    </form>-->
    </div>
  </body>
</html>
