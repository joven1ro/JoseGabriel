<?php

$Estados = array(
    array("id" => 1, "nombre" => "Jose", "gobernante" => "Fades", "num_municipios" => "Alan Walker","Vistas" => "230"),
    array("id" => 2, "nombre" => "Wendy", "gobernante" => "Destiny", "num_municipios" => "Nefflex","Vistas" => "549"),
    array("id" => 3, "nombre" => "Jaime", "gobernante" => "Monody", "num_municipios" => "TheFatRat","Vistas" => "234"),
    array("id" => 4, "nombre" => "Jesus", "gobernante" => "Canciones Divinas", "num_municipios" => "Vicente Fernandes","Vistas" =>"432"),
    array("id" => 5, "nombre" => "Karina", "gobernante" => "Darside", "num_municipios" => "NEONI","Vistas" =>"297")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Viwers</title>
</head>
<body>
    <table>
        <tr>
            <th>No. personas</th>
            <th>Nombre</th>
            <th>Canciones</th>
            <th>Cantante</th>
            <th>No'vecesEscuchada</th>
        </tr>
        <?php foreach ($Estados as $estado) { ?>
        <tr>
            <td><?php echo $estado['id']; ?></td>
            <td><?php echo $estado['nombre']; ?></td>
            <td><?php echo $estado['gobernante']; ?></td>
            <td><?php echo $estado['num_municipios']; ?></td>
            <td><?php echo $estado['Vistas']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<style>
    body{
        text-align: center;
    }
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid black;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #e6e6e6;
        }
    </style>
</style>