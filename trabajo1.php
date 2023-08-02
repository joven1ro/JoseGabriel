<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remicion</title>
    <?php include 'variables.php'?>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 >Nota de Remicion</h1>
    <table>
    <thead>
            <tr>
                <th class="titulo"colspan="3">CACHU-CHAS SA. de SV</th>
            </tr>    
        </thead>
        <tbody>
            <tr>
                <td class="color">Cliente</td>
                <td colspan = "2"><?php echo $Cliente ?></td>
            </tr>
            <tr>
                <td>No.001</td>
                <td>Fecha:</td>
                <td><?php echo $Fecha?></td>
            </tr>
            <tr>
                <td>Prodcuto</td>
                <td>Cantidad</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><?php echo $Gorra1?></td>
                <td><?php echo $Cantidad1?></td>
                <td><?php echo $Precio1?></td>
            </tr>
            <tr>
                 <td><?php echo $Gorra2?></td>
                 <td><?php echo $Cantidad2?></td>
                 <td><?php echo $Precio2?></td>
            </tr>
            <tr>
                <td><?php echo $Gorra3?></td>
                <td><?php echo $Cantidad3?></td>
                <td><?php echo $Precio3?></td>
            </tr>
           
            <tr>
                <td>Cantidad</td>
                <td><?php echo $Resultado1 ?></td>
                <td>Total Neto: <?php echo $Resultado2?></td>
            </tr>
    </table>
</body>
</html>
