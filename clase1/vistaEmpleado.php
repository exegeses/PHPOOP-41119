<?php

    require 'Persona2.php';
    require 'Empleado.php';
    $Empleado = new Empleado('Ronnie', 'Woods');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de herencia</title>
</head>
<body>
    <h1>Ejemplo de herencia</h1>
    <?= $Empleado->verDatos(); ?>

</body>
</html>
