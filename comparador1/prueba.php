
<?php

$txt = "";
if(isset( $_GET['nombre']) && !empty($_GET['nombre'])) {

    $bebida = $_GET['bebida'];
    $caloria = intval($_GET['caloria']);


    for ($i = 0; $i < $caloria; $i++) {
        $txt .= $bebida . "<br>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="EnvioGetUno.php?bebida=Cocacola&caloria=15">Botón para enviar el dato</a>
<?php

echo $txt;

?>
</body>
</html>
