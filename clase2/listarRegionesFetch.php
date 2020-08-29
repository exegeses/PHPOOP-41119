<?php

    $link = new PDO(
            'mysql:host=localhost;dbname=agencia',
            'root',
            'root'
                );
    $sql = "SELECT regID, regNombre 
                FROM regiones";

    $stmt = $link->prepare($sql);
    $stmt->execute();

    //$regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$region = $stmt->fetch(PDO::FETCH_ASSOC);

/*
    echo '<pre>';
        print_r($regiones);
    echo '</pre>';
*/
    while ( $region = $stmt->fetch(PDO::FETCH_ASSOC) ){
        echo $region['regID'], ' ';
        echo $region['regNombre'], '<br>';
    }

/*
    foreach( $regiones as $region ){
        echo $region['regID'], ' ';
        echo $region['regNombre'], '<br>';
    }
*/