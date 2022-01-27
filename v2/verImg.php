<?php

    require_once "metodos.php";
    $metodos = new Metodos();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta authot="Julio Antonio Ramos Gago <jramosgago.guadalupe@alumnado.fundacionloyola.net>" />

        <title>Ver Archivos</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Subir Imágenes</a></li>
                <li><a href="leerNombre.php">Ver Nombre de la Imagen</a></li>
                <li><a href="verImg.php">Ver Imágenes</a></li>
            </ul>
        </nav>

        <h2>Archivos</h2>

        <?php

            $metodos->verImg("archivos");
        ?>
    </body>
</html>