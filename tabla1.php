<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vertical_onchard_utc6";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);


//CONEXION
if ($conn->connect_error) {
    die("Conexion fallida " . $conn->connect_errno);
}

//CONSULTA REGISTRO
$sql = "SELECT * FROM humidity_history";

//CONSULTA
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <h1>Historial de Humedad</h1>
        <table id="tabla" style="margin: 0 auto;">

            <tr>
                <th>Fecha</th>
                <th>Jardinera</th>
                <th>Tiempo de riego</th>
                <th>Hora</th>

    
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_planter'] . "</td>";
                echo "<td>" . $row['irrigation_humidity'] . "</td>";
                echo "<td>" . $row['irrigation_humidity_date'] . "</td>";
                echo "<td>" . $row['irrigation_humidity_hour'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </tr>
            <button class="of" id="boton">
                Actualizar
            </button>
    </div>
</body>

</html>

<style>
    h1 {
        text-align: center;
    }

    table {
        align-items: center;
        margin-right: auto;
        margin-top: 5%;
        width: 100%;
        position: static;
    }

    th,
    td {
        width: 1%;
        border: 1px solid #030000;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #468B97;
    }

    td {
        background-color: #A1CCD1;
    }
    button{
        
    align-items: center;
    margin-top: 10%;
  
    }
    button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button.of {
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;

      margin:30px 40%;
      margin-bottom: 10px;
      text-align: center;
      line-height: 50px;

      transition: background-color 0.3s ease;

    }
</style>