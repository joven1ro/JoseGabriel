<?php
/* declaracion y asignacion de variable normal */
$nombre = 'ramon';
/* declaracion de arreglo */
$nombres = array('ramon','juan','ramona');
$numeros = array(1,2,3,4,5,6,7,8);
$flotantes = array(1.22 , 4.55, 9.12);
$booleanos = array(true,false,false,true);
$mezclados = array(1, 'juan', true, 1.55, 'A');

echo $nombre;
echo '<br>';
echo $nombres [2];
echo '<br>';
echo $numeros[2];
echo '<br>';
echo $booleanos[2];
echo '<br>';
echo $flotantes[2];
echo '<br>';
echo $mezclados[2];
echo '<br>';

if($numeros[5] >= 5){
    echo 'el numero es grande';
}else{
    echo 'el numero es chico';
}

if($nombres[2] === 'Jose Gabriel'){
    echo ' <br> Bienvenido Jose Gabriel';

}else{
    echo '<br> Hola quien seas';
}

if(gettype($mezclados)=== 'integer'){
echo'es un entero';
}else if (gettype($mezclados)=== 'string'){
echo'es una cadena string';
}else if(gettype($mezclados)=== 'boolean'){
    echo 'es un booleano';
    
}else{
    echo'es otro tipo de dato :(';
}

foreach($nombres as $nombre){
    echo '<br> el nombre es: '.$nombre;
}
foreach($numeros as $numero){
    echo'<br> el nombre es: '.$numero;
}
foreach($mezclados as $mez){
    echo'<br> el nombre es: '.$mez;
}
foreach($booleanos as $bool){
    echo'<br> el nombre es: '.$bool;
}
?>