<?php

    class Foo
    {
        private function __construct()
        {
            echo 'constructor';
        }
        public function publico()
        {
            echo 'método público';
        }
        private function privado()
        {
            echo 'método privado';
        }
        static function estatico()
        {
            echo 'método estático';
        }
    }

    #### mientras tanto, en OTRO ARCHIVO
    //$Foo = new Foo;
    //$Foo->publico();
    //$Foo->privado();
    Foo::estatico();