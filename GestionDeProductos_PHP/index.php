<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Puedes crear este archivo más adelante -->
</head>
<body>
    <h1>Aplicación de Gestión de Productos</h1>
    <div class="menu">
        <a href="index.php">Visualizar Productos</a>
        <a href="agregar.php">Agregar Producto</a>
        <a href="eliminar.php">Eliminar Producto</a>
    </div>
    <hr>
    <div class="contenido">
        <?php
        // Conexión a la base de datos
        include 'conexion.php';

        // Consulta para obtener los productos
        $sql = "SELECT * FROM productos";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Descripción</th></tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['precio'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No hay productos en la base de datos.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
