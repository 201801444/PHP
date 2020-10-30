<?php
    class Conectar{

        public static function conexion(){
            try{    
                $conexion = new PDO("mysql:host=localhost;dbname=makilgar","root","");            

                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(Exception $error){
                echo "Error en la linea : " . $error->getLine() . "</br>";

                echo "No pudimos conectar a la BBDD, error de tipo : " . $error->getMessage();
            }
            return $conexion;
        }
    }
?>