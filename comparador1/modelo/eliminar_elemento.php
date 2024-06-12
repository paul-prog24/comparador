<?php
// Obtener el identificador del elemento a eliminar desde la URL
$id = $_GET['id'];

// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comparador";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Realizar la eliminación del elemento en la base de datos
$sql = "DELETE FROM bebidas WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    // La eliminación fue exitosa
    echo "Elemento eliminado correctamente.";
} else {
    // Ocurrió un error durante la eliminación
    echo "Error al eliminar el elemento: " . $conn->error;
}

$conn->close();
?>
