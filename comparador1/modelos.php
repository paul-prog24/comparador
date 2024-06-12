<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link href="css/modelo.css" type="text/css" rel="stylesheet">

    <title>Modelos | Comparador</title>

</head>
<body>
<div id="contenedor">
    <?php include "includes/header.php"?>
<section>
    <h1 id="titulo">Ejemplos que puedes comparar</h1>

    <div id="contenedor_slider">
    <div id="contenedor_modelo">
        <img src="img/red_label.jpg">
        <img src="img/ron_barcelo.jpg">
        <img src="img/sprite.png">
        <img src="img/cocacola.jpg">
        <img src="img/cerveza_alhambra.jpg">

    </div>
    </div>
    <div id="container_modelo">
        <div class="red_label">
            <h2>Red Label</h2>
            <p>Categoría: Alcohol</p>
        </div>
        <div class="ron_barcelo">
            <h2>Ron Barceló</h2>
            <p>Categoría: Alcohol</p>
        </div>
        <div class="sprite">
            <h2>Sprite</h2>
            <p>Categoría: Refrescos</p>
        </div>
        <div class="cocacola">
            <h2>Coca-cola</h2>
            <p>Categoría: Refrescos</p>
        </div>
        <div class="alambra">
            <h2>Alhambra</h2>
            <p>Categoría: Cervezas</p>
        </div>

    </div>
    <div id="hr">
    <hr>
    </div>
    <div id="contenedor_boton">
        <a href="comparar.php"><button>Insertar bebida</button></a>
    </div>
</section>
    <?php include "includes/footer.php"?>
</div>
</body>
</html>

