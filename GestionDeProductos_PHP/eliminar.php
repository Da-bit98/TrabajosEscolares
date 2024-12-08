<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Eliminar Producto</h1>
    <div class="menu">
        <a href="index.php">Visualizar Productos</a>
        <a href="agregar.php">Agregar Producto</a>
        <a href="eliminar.php">Eliminar Producto</a>
    </div>
    <hr>
    <div class="formulario">
        <form action="procesar_eliminar.php" method="post">
            <label for="producto">Selecciona el producto a eliminar:</label>
            <select id="producto" name="id_producto" required>
                <option value="" disabled selected>Elige un producto</option>
                <?php
                include 'conexion.php';

                // Consulta para obtener los productos
                $sql = "SELECT id, nombre FROM productos";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                    }
                } else {
                    echo "<option value='' disabled>No hay productos disponibles</option>";
                }

                $conn->close();
                ?>
            </select>
            <br><br>
            <button type="submit">Eliminar Producto</button>
        </form>
    </div>
</body>
</html>
