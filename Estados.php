<?php

$Estados = array(
    array("id" => 1, "nombre" => " Juan Martínez", "gobernante" => " Ciudad Capital", "num_municipios" => 12),
    array("id" => 2, "nombre" => " María López", "gobernante" => "Villa del Sol", "num_municipios" => 8),
    array("id" => 3, "nombre" => "Carlos Ramírez", "gobernante" => "Pueblo Nuevo", "num_municipios" => 5),
    array("id" => 4, "nombre" => "Ana González", "gobernante" => "Puerto Esperanza", "num_municipios" => 10),
    
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estados</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Gobernante</th>
            <th>Número de municipios</th>
        </tr>
        <?php foreach ($Estados as $estado) { ?>
        <tr>
            <td><?php echo $estado['id']; ?></td>
            <td><?php echo $estado['nombre']; ?></td>
            <td><?php echo $estado['gobernante']; ?></td>
            <td><?php echo $estado['num_municipios']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<style>
    body{
        text-align: center;
    }
</style>