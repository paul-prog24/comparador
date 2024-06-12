<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de ejemplo</title>
    <link href="../css/comparador.css" rel="stylesheet" type="text/css">
    <link href="../css/estilos.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include "../includes/header2.php" ?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formulario_comparador">
    <h2>Compara cualquier bebida</h2>
    <div class="buscador_bebida">
    <label for="nombre">Bebida 1:</label>
    <input type="text" id="bebida1" name="bebida1" required><br><br>
    </div>
    <div class="bebida-bebida">
    <label for="nombre">Bebida 2:</label>
    <input type="text" id="bebida2" name="bebida2" required><br><br>
    </div>
    <input type="submit" value="Comparar" id="booton_formulario">
</form>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados desde el formulario
    $bebida1 = $_POST['bebida1'];
    $bebida2 = $_POST['bebida2'];

    // Conectar a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'comparador');

    // Verificar si la conexión fue exitosa
    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    // Escapar los valores para evitar inyección de SQL
    $bebida1 = $conexion->real_escape_string($bebida1);
    $bebida2 = $conexion->real_escape_string($bebida2);

    // Construir la consulta SQL
    $consulta = "SELECT * FROM bebidas WHERE nombre = '$bebida1' OR nombre = '$bebida2'";

    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Crear un array para almacenar los resultados
    $resultados = array();

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            // Agregar cada fila al array de resultados
            $resultados[] = $fila;
        }
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
<div id="comparacion">
    <h2>Resultado de comparación</h2>

    <?php if (!empty($resultados)): ?>
    <table id="tabla">
        <tr>
            <th>Nombre</th>
            <th>Calorías</th>
            <th>Azúcar</th>
            <th>Grasas</th>
        </tr>
        <?php
        $maxCalorias = max($resultados[0]['calorias'], $resultados[1]['calorias']);
        foreach ($resultados as $fila):
            $calorias = $fila['calorias'];
            $claseFila = ($calorias === $maxCalorias) ? 'fila-roja' : 'fila-verde';
            ?>
            <tr class="<?php echo $claseFila; ?>">
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['calorias']; ?></td>
                <td><?php echo $fila['azucar']; ?></td>
                <td><?php echo $fila['grasas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
    </div>
<?php else: ?>
    <p>No se encontraron resultados.</p>
<?php endif; ?>


<?php include "../includes/footer2.php" ?>

</body>
</html>