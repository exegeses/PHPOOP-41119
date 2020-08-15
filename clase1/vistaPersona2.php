<?php
    require 'funciones.php';
    require 'Persona2.php';
    $Persona2 = new Persona2( 'Morty', 'Smith' );

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
    echo $Persona2->verDatos();
?>
</body>
</html>