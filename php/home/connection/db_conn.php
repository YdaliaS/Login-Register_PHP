<?php

    // Crea una clase para la conexion
    class Conexion{
        // Crea el metodo conectarMySQL
        public static function conectarMySQL(){
            // indica el host y el nombre de la base de datos
            $cadena = "mysql:host=localhost;dbname=db_users";
            $usuario = "root";
            $password = "";

            // Con PDO realiza la conexion
            $conexion = new PDO($cadena, $usuario, $password);
            // retorna la conexion
            return $conexion;
        }
    }

?>

