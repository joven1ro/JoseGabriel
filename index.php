<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <?php include 'colores.php'?>
</head>
<body>
    <h1>TABLA DE COLORES</h1>
    <table>
        <thead>
            <tr>
                <th>NUM</th>
                <th>Color</th>
            </tr>    
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td><?php echo $color1 ?></td>
            </tr>
            <tr>
                <td>02</td>
                <td><?php echo $color2 ?></td>
            </tr>
            <tr>
                <td>03</td>
                <td><?php echo $color3 ?></td>
            </tr>
            <tr>
                <td>04</td>
                <td><?php echo $color4 ?></td>
            </tr>
        </tbody>
    </table>
 
</body>
</html>