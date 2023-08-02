<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantantes</title>
</head>
<body>
    <h1>MIS CANTANTES FAVORITOS</h1>
    <?php
    $cantantes = array (
        array("id"=> 1, "nombre" => "JULIO PRECIADO", "genero" =>"BANDA", "edad" => 38,"horas_reproduccion" => 180 ,"cancion" => "el columpio"),
        array("id"=> 2, "nombre" => "PAQUITA DEL BARRIO", "genero" =>"RANCHERA", "edad" => 70,"horas_reproduccion" => 500 ,"cancion" => "Rata de 2 patas"),
        array("id"=> 3, "nombre" => "VICENTE FERNANDES", "genero" =>"MARIACHI", "edad" => 60,"horas_reproduccion" => 1803 ,"cancion" => "MUJERES DIVINAS"),
        array("id"=> 4, "nombre" => "NEFFLEX", "genero" =>"ELECTRONICA", "edad" => 28,"horas_reproduccion" => 2030 ,"cancion" => "DESTINY"),
    );
    $cantante = $cantantes[3];
    echo "Nombre: ". $cantante['nombre']."<br>";
    echo "Genero: ". $cantante['genero']."<br>";
    echo "Horas de reproduccion: ". $cantante['horas_reproduccion']."<br>";
    echo "Cancion: ". $cantante['cancion']."<br>";
    ?>
</body>
</html>

<?php



?>