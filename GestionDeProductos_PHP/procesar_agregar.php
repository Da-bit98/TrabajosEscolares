<?php
include 'conexion.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES ('$nombre', '$precio', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();

// Redireccionar a la página principal
header("Location: index.php");
exit;
?>
