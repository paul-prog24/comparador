
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/comparacion.css" rel="stylesheet" type="text/css">
    <link href="../css/estilos.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php include "../includes/header2.php" ?>




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
$calorias = $_POST['calorias'];
$azucar = $_POST['azucar'];
$grasas = $_POST['grasas'];
$foto = $_POST['foto'];


// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO bebidas (nombre, calorias, azucar, grasas, foto)
        VALUES ('$nombre', '$calorias', '$azucar', '$grasas', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo '<h2>' . "Bebidas y estadísticas" . '</h2>';
    echo '<br>';
    echo '<button id="boton_vuelta" onclick="window.location.href=\'../comparar.php\'">Volver</button>';



} else {
    echo "Error al registrar bebida: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM bebidas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo '<div id="comparador">';
        echo '<h2> ' . $row['nombre'] . '</h2>';
        echo '<p>Calorías: ' . $row['calorias'] . '</p>';
        echo '<p>Azúcar: ' . $row['azucar'] . '</p>';
        echo '<p>Grasas: ' . $row['grasas'] . '</p>';
        echo '<button onclick="eliminarElemento(' . $row['id'] . ')">Eliminar</button>';
        echo '<button><a href="comparador.php">Comparar</a></button>';
        echo '</div>';
    }

    echo '<script>
    function eliminarElemento(id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                // El elemento ha sido eliminado exitosamente
                alert("El elemento ha sido eliminado.");
                // Recargar la página para mostrar la lista actualizada
                location.reload();
            }
        };
        xmlhttp.open("GET", "eliminar_elemento.php?id=" + id, true);
        xmlhttp.send();
    }
</script>';
} else {
    echo "Error en la Base de datos";
}

$conn->close();
?>
<?php include "../includes/footer2.php" ?>
</body>
</html>
