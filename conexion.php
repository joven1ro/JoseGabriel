<?php


//DECLARAMOS NUESTRA VARIABLES
$server ='localhost'; //NOMBRE DE NUESTRO SERVIDOR LOCAL
$user = 'root';//NOMBRE DEL USUARIO
$password = '';//CONTRASENA DEL USUARIO
$dbname = 'PRUEBA';//EL NOMBRE DE LA BASE DE DATOS

$conn = new mysqli ($server, $user, $password,$dbname);
//verifica la conexion
if ($conn -> connect_error){
    die ("Conexion fallida ". $conn -> connect_errno);
}
?>