<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha_ingreso'];

$sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio, fecha_ingreso)
VALUES ('$nombre', '$descripcion', $cantidad, $precio, '$fecha')";

if ($conexion->query($sql) === TRUE) {
  echo "Producto registrado con éxito. <a href='panel.php'>Volver</a>";
} else {
  echo "Error: " . $conexion->error;
}
?>
<head><link rel="stylesheet" href="estilos.css"></head>