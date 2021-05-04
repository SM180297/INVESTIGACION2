
<?php

if(isset($_POST['submit'])){
 $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $correo=$_POST['correo'];
    if (empty($nombre) || empty($edad) || empty($correo)) {
       echo"<p> error algun campo esta vacio </p>";
    }
   else {
    echo"<p> todos los datos estan bien  </p>";

      // if (strlen($nombre)>15 ) //nos ayuda a saber la cantidad de valores que tiene el texto
       //{
      // echo"<p> error el nombre es muy largo </p>";
    //}
    if (!preg_match("/^[a-zA-Z]+/",$nombre)) {
          echo"<p> error el nombre lleva numeros  </p>";
    }
     
    // https://www.php.net/manual/es/filter.filters.validate.php  y  pagina de filtros 
    //if (!is_numeric($edad)) //nos ayuda a saber si es un numero 
      // {
      // echo"<p> error la edad no es un numero </p>";
    //}
    if (!filter_var($edad,FILTER_VALIDATE_INT)) //nos ayuda a saber si es un numero  entero
       {
       echo"<p> error la edad no es un numero </p>";
    }
    if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) //nos ayuda a saber la cantidad de valores que tiene el texto
    {
    echo"<p> error el correo no esta bien </p>";
 }
   }
   
}
?>