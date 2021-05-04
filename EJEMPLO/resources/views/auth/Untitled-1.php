
<?php
include("obtenerdatos.php");
?>
<?php
include("insertar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL=StyleSheet HREF="css/estilos.css" TYPE="text/css" MEDIA=screen>
    <title>pruebas</title>
   

</head>
<body>
    <div class ="div">
  
    <p class="n1">
        hola mujndo que pex

    </p>
    <p class="n2">
        no hay tranace

    </p>
          
    
</div>
<form action="" class="for">
    <input type="text" id="valor1" value="2">  <br>
    <input type="text" id="valor2" value="3">
    <input type="button" value="sumar " onclick="alert( suma(10,50));">
    </form>

    <form action="" method="post" class="LOL">
      <h1>Registro</h1>
      <label for="">Nombre:</label>
      <input type="text" name="nombre">
      <label for="">Edad:</label>
      <input type="text" name="edad">
      <label for="">Correo:</label>
      <input type="text" name="correo">
      <input type="submit" name="submit">
    </form>

<script src="js/alertas.js"> </script>
</body>
</html>