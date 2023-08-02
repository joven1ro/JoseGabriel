<?php
/* CADENA DE CONEXION  PHP DE DOCUMENTACION */
/* $mysqli = new mysqli ("localhost", "root","","cantantes");
if($mysqli -> connect_errno){
    echo "Fallo al conector a MySQL: (". $mysqli ->connect_errno . ")".$mysqli ->connect_error;
}
echo $mysqli -> host_info . "\n";
echo ("felicidades, estas conectado a "); */

//DECLARAMOS NUESTRA VARIABLES
$server ='localhost'; //NOMBRE DE NUESTRO SERVIDOR LOCAL
$user = 'root';//NOMBRE DEL USUARIO
$password = '';//CONTRASENA DEL USUARIO
$dbname = 'banco';//EL NOMBRE DE LA BASE DE DATOS

$conn = new mysqli ($server, $user, $password,$dbname);
//verifica la conexion
if ($conn -> connect_error){
    die ("Conexion fallida ". $conn -> connect_errno);
}
?>