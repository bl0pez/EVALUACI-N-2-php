<?php
    class Conexion {
        private $conexion;

        public function __construct() {
            try {
                $this->conexion = new PDO("mysql:host=localhost;dbname=hotelmdm", "root", "");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }

        public function getConexion() {
            return $this->conexion;
        }


    }



?>