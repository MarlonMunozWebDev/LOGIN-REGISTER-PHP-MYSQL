<?php
//PARA UTILIZAR LA SESSION
session_start();

include_once '../PHP-CRUD/conexion.php';

//GUARDAMOS EN VARIABLES LOS DATOS OBTENIDOS DEL FORMULARIO
$usuario_login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];

echo '<pre>';
var_dump($usuario_login);
var_dump($contrasena_login);
echo '<pre>';

//RECORRIDO PARA CHECAR SI EXITE EL NOMBRE DE USUARIO EN LA BD
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo '<pre>';

//CONDIONAMOS POR SI NO EXISTE MATAR LA OPERACION Y MANDAR ERROR
if(!$resultado) {
  echo 'No existe el usuario';
  die();
}

//COMO Y RECORRIMOS AL USUARIO PODEMOS MANDAR A LLAMAR SU CONTRASEÑA
echo '<pre>';
var_dump($resultado['contrasena']);
echo '<pre>';

//VERIFICAMOS SI LA CONTRASEÑA ES IGUAL A LA DEL USUARIO
if( password_verify($contrasena_login, $resultado['contrasena']) ) {
  $_SESSION['usuario'] = $usuario_login;
  header('Location: restringido.php');

} else {
  echo 'Contraseña Incorrecta';
  die();
}
 ?>
