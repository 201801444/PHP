<?php
    class Productos_modelo{

        private $db;

        private $productos;

        public function __construct(){
            
            require_once("Model/Conectar.php");

            $this->db = Conectar::conexion();

            $this->productos = array();  //array que de momento esta vacio
        }

        public function getProductos(){
            $consulta = $this->db->query("SELECT * FROM productos");

            //pasamos los datos de un arreglo a otro
            while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[] = $fila;
            }

            return $this->productos;
        }
    }
?>