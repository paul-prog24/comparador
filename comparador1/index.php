<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">

    <title>Comparador | 3º</title>
</head>
<body>
<div id="contenedor">
    <?php include "includes/header.php";?>
    <section>

        <div id="container">
            <div id="texto_section">
                <p>Regístrate y compara productos</p>
            </div>
            <div id="registro_section">
                <h1>Registro</h1>
                <form action="modelo/registro.php" method="post">
                    <div class="elementos_form">
                    <label>Nombre:</label><input id="nombre" name="nombre" type="text" placeholder="ej. Luis, Jose Luis" required>
                    </div>
                    <div class="elementos_form">
                    <label>Primer Apellido:</label><input id="apellido1" name="apellido1" type="text" placeholder="ej. Sánchez " required>
                    </div>
                    <div class="elementos_form">
                        <label>Segundo Apellido:</label><input id="apellido2" name="apellido2" type="text" placeholder="ej. de Prada, López" required>
                    </div>
                    <div class="elementos_form">
                    <label>Correo electrónico:</label><input id="correo" name="correo" type="text" placeholder="ej. correo@dominio.com" required>
                    </div>
                    <div class="elementos_form">
                        <label>Número teléfono:</label><input id="telefono" name="telefono" type="text" placeholder="ej. 914998884" required>
                    </div>
                    <div class="elementos_form">
                        <label>Contraseña:</label><input id="contrasena" name="contrasena" type="password" required>
                    </div>
                    <div id="contenedor_botones">
                    <div id="boton_registro">
                        <input type="submit" value="Registro" id="boton_hover">
                    </div>
                    <div id="boton_sesion">
                        <a href="sesion.php"><input type="button" value="Inicia Sesión" id="boton_hover"></a>
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
    <?php include "includes/footer.php";?>
</div>
</body>
</html>
