<?php
include("conexion.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Producto</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f5f7fa;
      color: #2c3e50;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .contenedor {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 500px;
      width: 100%;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #34495e;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      background-color: #27ae60;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    button:hover {
      background-color: #1e8449;
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <h2>Registrar Producto</h2>

    <form action="guardar_producto.php" method="POST">
      <label>Nombre:</label>
      <input type="text" name="nombre" required>

      <label>Descripción:</label>
      <input type="text" name="descripcion">

      <label>Stock Inicial:</label>
      <input type="number" name="stock" required>

      <button type="submit">Guardar</button>
    </form>
  </div>
</body>
</html>

