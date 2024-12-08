<?php
include 'conexion.php';

// Obtener el ID del producto desde el formulario
$id_producto = $_POST['id_producto'];

// Preparar y ejecutar la consulta SQL
$sql = "DELETE FROM productos WHERE id = $id_producto";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado correctamente.";
} else {
    echo "Error al eliminar el producto: " . $conn->error;
}

// Cerrar conexión
$conn->close();

// Redireccionar a la página principal
header("Location: index.php");
exit;
?>
