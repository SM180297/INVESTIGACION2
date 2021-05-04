
<?php
if(isset($_POST['submit'])){
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
    
    $error = array();
    $registro=1;
    if(!empty($_POST))
    {
        $nombre = $mysqli->real_escape_string($_POST['nombre']);
        $apellido = $mysqli->real_escape_string($_POST['apellido']);
        $edad = $mysqli->real_escape_string($_POST['edad']);
        $correo = $mysqli->real_escape_string($_POST['correo']);
        $contra = $mysqli->real_escape_string($_POST['contraseña']);
        $registro = registrar($nombre, $apellido, $edad , $correo, $contra);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="{{ asset('estilos.css')}}">
    <title>pruebas</title>
</head>
<body>
   
    <form action="" method="POST" class="LOL">
      <h1>Registro</h1>
      <label for="">Nombre:</label>
      <input type="text" name="nombre">
      <label for="">apellido:</label>
      <input type="text" name="apellido">
      <label for="">edad:</label>
      <input type="text" name="edad">
      <label for="">correo:</label>
      <input type="text" name="correo">
      <label for="">contraseña:</label>
      <input type="text" name="contraseña">
      <CENTER>
      <input type="submit" name="submit"></CENTER>
     
    </form>

</body>
</html>