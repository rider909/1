<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "soboce_inventario");
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inventario SOBOCE</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f4f6f8;
      padding: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      background-color: #2c3e50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #ecf0f1;
    }

    tr:hover {
      background-color: #d0e4f1;
    }

    td {
      color: #2c3e50;
    }
  </style>
</head>
<body>
  <h2>Inventario de Productos</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Fecha de ingreso</th>
    </tr>

    <?php while($fila = $resultado->fetch_assoc()): ?>
      <tr>
        <td><?= $fila['id_producto'] ?></td>
        <td><?= $fila['nombre'] ?></td>
        <td><?= $fila['descripcion'] ?></td>
        <td><?= $fila['cantidad'] ?></td>
        <td><?= $fila['precio'] ?> Bs</td>
        <td><?= $fila['fecha_ingreso'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
