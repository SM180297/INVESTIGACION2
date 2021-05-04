<?php
$mysqli = new mysqli('localhost', 'root', '', 'prueba');

if($mysqli->connect_error){
    die('error de conexion' . $mysqli->connect_error);
}

else{
    echo 'conexion funciona';

function registrar($nombre, $apellido, $edad, $correo, $contra)
{   
global $mysqli;
$stmt = $mysqli->prepare("INSERT INTO registro (nombre, apellido, edad, correo,contraseña ) VALUES(?,?,?,?,?)");
$stmt->bind_param('sssss', $nombre,$apellido, $edad, $correo, $contra);

if ($stmt->execute()){
    return $mysqli->insert_id;
} else{
    return 0;   
}
}
}

?>