<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comparador";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];

// Consultar si el correo ya está registrado
$sql = "SELECT correo FROM usuarios WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Ya existe un usuario con este correo";
    echo '<button onclick="window.location.href=\'../sesion.php\'">Volver</button>';
    exit();
}

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, correo, telefono, contrasena)
        VALUES ('$nombre', '$apellido1', '$apellido2', '$correo', '$telefono','$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    echo '<button onclick="window.location.href=\'../sesion.php\'">Volver</button>';
} else {
    echo "Error en el registro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
