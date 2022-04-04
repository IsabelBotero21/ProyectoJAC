<?php
include('../util/conexion.php');
session_start();
if(!isset($_GET['id'])){
    exit();
 }

 $id=$_GET['id'];

$sentencia=$connection->prepare("DELETE FROM tblintegrantescomite WHERE id=?;");
$resultado=$sentencia->execute([$id]);
if ($resultado===TRUE) {
    echo "<h1> Registro guardo con exito. </h1>";
  }

else  {
 echo "<h1> Registro no guardo con exito. </h1> <br/>";
}

echo "<h1> <a href='../reuniones.php' </a> Regresar al Formulario </h1>";

?>