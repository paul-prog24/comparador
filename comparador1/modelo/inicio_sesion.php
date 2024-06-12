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
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Verificar si el correo y la contraseña coinciden con algún registro en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['correo'] = $correo;
    header("Location: ../modelos.php"); // Redirigir al usuario a la página de inicio
} else {
    // Credenciales incorrectas
    echo '<script>alert("Correo o contraseña incorrectos")</script>';
    echo '<button onclick="window.location.href=\'../sesion.php\'">Volver</button>';

}

$conn->close();
?>
