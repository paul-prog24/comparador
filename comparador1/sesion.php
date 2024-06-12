<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link href="css/sesion.css" type="text/css" rel="stylesheet">

    <title>Comparador | 3º</title>

</head>
<body>
<div id="contenedor">
    <?php include "includes/header.php"?>
    <section>

        <div id="container">
            <div id="texto_section">
                <p>Inicia sesión y compara productos</p>
            </div>
            <div id="inicio_section">
                <h1>Inicia Sesión</h1>
                <form action="modelo/inicio_sesion.php" method="post">

                    <div class="elementos_form">
                        <label>Correo electrónico:</label><input id="correo" name="correo" type="text"  placeholder="ej. correo@dominio.com" required>
                    </div>
                    <div class="elementos_form">
                        <label>Contraseña:</label><input id="contrasena" name="contrasena" type="password"  required>
                    </div>
                    <div id="contenedor_botones">
                        <div id="boton_registro">
                           <a href="index.php"><input type="button" value="Registrate" id="boton_hover"></a>
                        </div>
                        <div id="boton_sesion">
                            <input type="submit" value="Inicia Sesión" id="boton_hoover">
                        </div>
                    </div>
                </form>

                <div id="contenedor_informacion">

                    <h2>Compara tus bebidas favoritas</h2>
                    <h3>¿Qué datos obtendrás?</h3>
                    <p>Valor calórico, azúcares, grasas saturadas...</p>

                </div>
            </div>
        </div>

    </section>
    <?php include "includes/footer.php"?>
</div>
</body>
</html>

