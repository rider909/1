<form method="POST" action="guardar_producto.php">
  <input type="text" name="nombre" placeholder="Nombre" required>
  <input type="text" name="descripcion" placeholder="Descripción" required>
  <input type="number" name="cantidad" placeholder="Cantidad" required>
  <input type="number" name="precio" placeholder="Precio" step="0.01" required>
  <input type="date" name="fecha_ingreso" required>
  <button type="submit">Guardar</button>
</form>
<head><link rel="stylesheet" href="estilos.css"></head>