<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link href="css/comparar.css" type="text/css" rel="stylesheet">
    <title>Página Comparar | Comparador</title>
</head>
<body>
<div id="contenedor">
    <?php include "includes/header.php";?>
    <section>
        <div id="contenedor_formulario">
            <h2>Ingresar datos de bebida</h2>
            <form action="modelo/comparacion.php" method="post" enctype="multipart/form-data">
                <div>
                    <label>Nombre:</label><input id="nombre" name="nombre" type="text"  placeholder="ej. Lata coca-cola" required>
                </div>
                <div>
                    <label>Calorias:</label><input id="calorias" name="calorias" type="number" placeholder="g por cada 100ml" required>
                </div>
                <div>
                    <label>Azúcares:</label><input id="azucar" name="azucar" type="number" placeholder="g por cada 100ml" required>
                </div>
                <div>
                    <label>Grasas:</label><input id="grasas" name="grasas" type="number" placeholder="g por cada 100ml" required>
                </div>
                <div>
                    <label>Foto:</label><input id="foto" name="foto" placeholder="ruta" type="text">
                </div>


                <div>
                    <input type="submit" value="Insertar">
                </div>
            </form>
            <div id="boton_volver">
           <a href="modelos.php"><button>Volver</button></a>
            </div>
        </div>
    <div id="php">

    </div>
    </section>
    <?php include "includes/footer.php";?>
</div>

</body>
</html>