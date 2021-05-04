<?php
if(isset($_POST['submit'])){
require 'conexion\conexion.php';
$error = array();
$registro=1;
if(!empty($_POST))
{
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $edad = $mysqli->real_escape_string($_POST['edad']);
    $correo = $mysqli->real_escape_string($_POST['correo']);
    $registro = registrar($nombre, $edad, $correo);
}

else if($registro > 0){
    echo 'si funciona';
} 
else if($registro = 1)
{
}
else{
    echo 'no funciona';
}
}
?>