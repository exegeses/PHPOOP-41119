<?php

    class Empleado extends Persona2
    {
        private $sueldo;

        public function verDatos()
        {
            $mensaje = Persona2::verDatos();
            $mensaje .= 'Sueldo: '.$this->getSueldo();
            return $mensaje;
        }


        /**
         * @return mixed
         */
        public function getSueldo()
        {
            return $this->sueldo;
        }
        /**
         * @param mixed $sueldo
         */
        public function setSueldo($sueldo): void
        {
            $this->sueldo = $sueldo;
        }
    }