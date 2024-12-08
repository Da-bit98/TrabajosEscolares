<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Agregar Producto</h1>
    <div class="menu">
        <a href="index.php">Visualizar Productos</a>
        <a href="agregar.php">Agregar Producto</a>
        <a href="eliminar.php">Eliminar Producto</a>
    </div>
    <hr>
    <div class="formulario">
        <form action="procesar_agregar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
            <br><br>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
            <br><br>
            <button type="submit">Agregar Producto</button>
        </form>
    </div>
</body>
</html>
