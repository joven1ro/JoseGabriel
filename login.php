<?php
session_start();
require 'conexion.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') { 
$username = $_POST['username'];
$password = $_POST['password'];

$sqlauth = $conn -> prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
$sqlauth ->bind_param('ss',$username,$password);
$sqlauth ->execute();

if($sqlauth -> fetch()){
    $_SESSION['username'] = $username;
    header('Location: home.php');
    exit();
}else{
    echo "Dato invalidos, intenta nuevamente.";
}
}
?>