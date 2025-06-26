<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Inventario SOBOCE</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f4f6f8;
      color: #2c3e50;
      padding: 20px;
    }

    .contenedor {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #34495e;
    }

    .acciones {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }

    .acciones a {
      text-decoration: none;
      display: inline-block;
      background-color: #3498db;
      color: white;
      padding: 14px 24px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      transition: background-color 0.2s;
      width: 100%;
      text-align: center;
      max-width: 300px;
    }

    .acciones a:hover {
      background-color: #2c80b4;
    }

    .acciones a:nth-child(2) {
      background-color: #27ae60;
    }

    .acciones a:nth-child(2):hover {
      background-color: #1e8449;
    }

    .acciones a:nth-child(3) {
      background-color: #f39c12;
    }

    .acciones a:nth-child(3):hover {
      background-color: #d68910;
    }

    .acciones a:last-child {
      background-color: #e74c3c;
    }

    .acciones a:last-child:hover {
      background-color: #c0392b;
    }

    /* Responsive para celular */
    @media (max-width: 600px) {
      .contenedor {
        padding: 20px;
      }

      .acciones a {
        font-size: 15px;
        padding: 12px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

    <h2>Acciones rápidas:</h2>
    <div class="acciones">
      <a href="agregar_producto.php">➕ Agregar Producto</a>
      <a href="registrar_producto.php">📦 Registrar Producto</a>
      <a href="ver_inventario.php">📋 Ver Inventario</a>
      <a href="login.php">🚪 Cerrar sesión</a>
    </div>
  </div>
</body>
</html>
