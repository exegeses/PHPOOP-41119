<?php

    class Conexion
    {
        private function __construct()
        {} // evitamos que se instancie

        static function conectar()
        {
            $link = new PDO(
                'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
            );
            return $link;
        }
    }