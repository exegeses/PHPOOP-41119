<?php

    class Region
    {
        private $regID;
        private $regNombre;


        /**
         * @return array
         */
        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $regiones;
        }

        public function verRegionPorID()
        {
            $link = Conexion::conectar();
            $regID = $_GET['regID'];
            $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = ".$regID;

            $stmt = $link->prepare($sql);
            $stmt->execute();

            $datosRegion = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->setRegID( $datosRegion['regID'] );
            $this->setRegNombre( $datosRegion['regNombre'] );
            return $this;

        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "UPDATE regiones
                       SET regNombre = :regNombre
                     WHERE regID = :regID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);

            if( $stmt->execute() ){
                $this->setRegID( $regID );
                $this->setRegNombre( $regNombre );
                return true;
            }
            return false;

        }

        ### TAREA: hacer agregarRegion()
        
        public function getRegID()
        {
            return $this->regID;
        }
        public function setRegID($regID): void
        {
            $this->regID = $regID;
        }

        public function getRegNombre()
        {
            return $this->regNombre;
        }
        public function setRegNombre($regNombre): void
        {
            $this->regNombre = $regNombre;
        }

    }