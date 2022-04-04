<?php
include ('../util/conexion.php');

$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$municipio = $_POST['municipio'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['gmail'];

$insertar = $connection->prepare("INSERT INTO tbljac (nit, nombre, municipio, direccion, telefono, gmail)
 VALUES ('$nit','$nombre','$municipio','$direccion','$telefono','$email')");
 $insertar->execute();

 if ($insertar) {
              echo "<h1> Registro guardo con exito. </h1>";
           }
 
 else  {
           echo "<h1> Registro no guardo con exito. </h1> <br/>";
       }
 
  echo "<h1> <a href='../crearJac.php' </a> Regresar al Formulario </h1>";
 

 ?>
  