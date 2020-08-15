<?php
    require 'funciones.php';
    require 'Persona.php';
    $Persona = new Persona;
    //$Persona->nombre = 'Rick';
    /* no se puede acceder porque es private */
    $Persona->setNombre('Rick');
    $Persona->setApellido('Sanchez');

    //mostrar($Persona);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vista Persona</title>
</head>
<body>
    <h1>Vista persona</h1>
<?php
    echo $Persona->verDatos();
?>
</body>
</html>