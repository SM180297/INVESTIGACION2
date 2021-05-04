<?php
if(isset($_POST['submit'])){
require "{{ asset('conexion.php')}}";
$error = array();
$registro=1;
if(!empty($_POST))
{
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $apellido = $mysqli->real_escape_string($_POST['apellido']);
    $edad = $mysqli->real_escape_string($_POST['edad']);
    $correo = $mysqli->real_escape_string($_POST['correo']);
    $contra = $mysqli->real_escape_string($_POST['contraseña']);
    $registro = registrar($nombre,$apellido $edad, $correo, $contra);
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