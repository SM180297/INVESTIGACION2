<?php
$mysqli = new mysqli('localhost', 'root', '', 'prueba2');

if($mysqli->connect_error){
    die('error de conexion' . $mysqli->connect_error);
}

else{
    echo 'conexion funciona';

function registrar($nombre, $edad, $correo)
{   
global $mysqli;
$stmt = $mysqli->prepare("INSERT INTO datos (nombre, edad, correo) VALUES(?,?,?)");
$stmt->bind_param('sis', $nombre, $edad, $correo);

if ($stmt->execute()){
    return $mysqli->insert_id;
} else{
    return 0;   
}
}
}

?>