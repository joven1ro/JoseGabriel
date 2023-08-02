<?php 
include 'conexionbanco.php';
echo ("<h1>EMPLEADO DE BANCO</h1>");

$sql = "SELECT * FROM empleado";
$result = $conn -> query($sql);

if($result -> num_rows > 0){
    echo"<table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Edad</th>
            <th>Puesto</th>
            <th>Salario</th>
        </tr>";
while($row = $result -> fetch_assoc()){
    echo"<tr>
            <td>". $row["ID"]. "</td>
            <td>". $row["NOMBRE"]. "</td>  
            <td>". $row["APELLIDO"]. "</td>
            <td>". $row["DIRECCION"]. "</td> 
            <td>". $row["EDAD"]. "</td> 
            <td>". $row["PUESTA"]. "</td>
            <td>". $row["SALARIO"]. "</td> 
    </tr>";
}
            
}


if (isset($_POST['buscar'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM empleado WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "ID: " . $row["ID"] . "<br>";
        echo "Nombre: " . $row["NOMBRE"] . "<br>";
        echo "Apellido: " . $row["APELLIDO"] . "<br>";
        echo "Dirección: " . $row["DIRECCION"] . "<br>";
        echo "Edad: " . $row["EDAD"] . "<br>";
        echo "Puesto: " . $row["PUESTA"] . "<br>";
        echo "Salario: " . $row["SALARIO"] . "</td>";
    } else {
        echo "No se encontró ningún empleado con el ID proporcionado.";
    }
}

//Insertar empleado
if(isset ($_POST['insertar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $edad = $_POST['edad'];
    $puesta = $_POST['puesta'];
    $salario = $_POST['salario'];

    $sql="INSERT INTO  empleado(nombre, apellido, direccion, edad, puesta, salario) VALUES('$nombre','$apellido','$direccion','$edad','$puesta','$salario');";

    if($conn -> query($sql)=== TRUE){
        header("Location: banco.php");
        exit();
        }else{
            echo "<script>alert('Error al insertar empleado: ".$conn->error."');</script>";
        }
}

//ELIMINAR EMPLEADO
if (isset($_POST['eliminar'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM empleado WHERE id = $id";

    if($conn -> query($sql)=== TRUE){
        header("Location: banco.php");
        exit();
        }else{
            echo "<script>alert('Error al eliminar empleado: ".$conn->error."');</script>";
        }
}
//ACTUALIZAR EMPLEADO

/* if(isset ($_POST['editar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nacimiento = $_POST['nacimiento'];
    $edad = $_POST['edad'];
    $estado = $_POST['estado'];
    $nacionalidad = $_POST['nacionalidad'];

    $sql="INSERT INTO  empleado(id, nombre, apellido, nacimiento, edad, estado, nacionalidad) VALUES('$nombre','$apellido','$direccion','$edad','$puesta','$salario');";
    if($conn -> query($sql)=== TRUE){
        header("Location: banco.php");
        exit();
        }else{
            echo "<script>alert('Error al editar empleado: ".$conn->error."');</script>";
        }
} */
 if(isset ($_POST['editar'])){
$id = $_POST['id'];
$nombre = $_POST['nombre'];


$sql = "UPDATE empleado SET nombre='$nombre' WHERE id = $id";

if ($conn -> query($sql)=== TRUE) {
    header("Location: banco.php");
    exit();
} else {
    echo ($conn->error);
    
}
} 




?>




        <form method="POST" action="">
            <label for="id">ID del empleado:</label>
            <input type="text" name="id" id="id" required>
            <button type="submit" name="buscar">Buscar</button>
        </form>

        <h1>ELIMINAR EMPLEADOS</h1>
        <form method="POST" action="">
            <label for="id">ID del empleado:</label>
            <input type="text" name="id" id="id" required>
            <button type="submit" name="eliminar">Eliminar</button>
        </form>



        <h1>INSERTAR EMPLEADOS</h1>
        <form method="POST" action="banco.php">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" require><br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" require><br>
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" require><br>
            <label for="edad">Edad:</label>
            <input type="text" name="edad" id="edad" require><br>
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" id="puesto" require><br>
            <label for="salario">Salario:</label>
            <input type="text" name="salario" id="salario" require><br>
            <button type="submit" name="insertar">Insertar</button>

        </form> 
    	
        <h1>FORMULARIO</h1>
        <form method="POST" action="banco.php">

        <label for="nombre">ID:</label>
            <input type="text" name="id" id="id" require><br>      
        <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" require><br>
   
            <button type="submit" name="editar">Editar</button>


        </form> 
        

        <?php
        $conn->close(); 
        ?>
