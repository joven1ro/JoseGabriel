<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    <h1>BIENVENIDO</h1>
</body>
</html>

<?php
session_start();

if(!isset($_SESSION['username'])){
    
    header('Location: login.html');
    exit();
}
echo "!Bienvenido(a),". $_SESSION['username']."!Has iniciando sesion";

?>