<?php

$databaseHost ='localhost';
$databaseName ='db_users';
$databseUsername ='root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost,$databseUsername,$databasePassword,$databaseName);

if(!$conn){
    echo '¡¡Error de conexion!!';
}
?>