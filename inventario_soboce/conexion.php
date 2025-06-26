<?php
$conexion = new mysqli("localhost", "root", "", "soboce_inventario");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}
?>
<head><link rel="stylesheet" href="estilos.css"></head>