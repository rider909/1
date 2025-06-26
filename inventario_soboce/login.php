<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - Sistema Inventario SOBOCE</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #ecf0f1;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-box {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background-color: #2980b9;
      color: white;
      border: none;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-box button:hover {
      background-color: #21618c;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="verificar.php">
      <input type="text" name="usuario" placeholder="Usuario" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
  </div>
</body>
</html>
