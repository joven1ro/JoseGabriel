<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'conexion.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTANTES DE BASE DE DATOS</title>
</head>
<body>
    <h1>MIS CANTANTES</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Genero</th>
                <th>edad</th>
                <th>Horas</th>
                <th>Cancion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result -> num_rows>0){
                while($row = $result -> fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>". $row ['id']."</td>";
                    echo "<td>". $row ['nombre']."</td>";
                    echo "<td>". $row ['genero']."</td>";
                    echo "<td>". $row ['horas_repro']."</td>";
                    echo "<td>". $row ['edad']."</td>";
                    echo "<td>". $row ['cancion']."</td>";
                    echo "</tr>";
                }

            }else{
                echo "<td colspan ='6'>No hay datos</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body> 
</html>