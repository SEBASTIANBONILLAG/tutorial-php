<?php
$fecha = date("d/m/Y");
$hora = date("h:i:s");
$numero = 37;
$numero1 = 31; //asignamos un valor integer
$numero2 = 5.12; //asignamos un valor float

?>

<DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Tutorial Forcontu</title>
        <link rel="stylesheet" href="style2.css" />
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>TUTORIAL PHP</h1>

        <p><?php echo "fecha: " . $fecha;  ?></p>
        <p><?php echo "hora: " . $hora;  ?></p>
        <?php echo "<p>el valor de la variable numero es $numero</p>"; ?>


        


    </body>
</html>