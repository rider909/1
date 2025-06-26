<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
  session_start();
  $_SESSION['usuario'] = $usuario;
  header("Location: panel.php");
} else {
  echo "Usuario o contraseña incorrectos.";
}
?>
<head><link rel="stylesheet" href="estilos.css"></head>