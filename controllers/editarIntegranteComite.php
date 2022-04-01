<?php

include("../util/conexion.php");
session_start();
 

if(!isset($_POST['oculto'])){
    exit();
 }

$id=$_POST['id'];
$usuario = $_POST['usuario'];
$comite = $_POST['comite'];
$periodo = $_POST['periodo'];
$estado = $_POST['estado'];

$sentencia=$connection->prepare("UPDATE tblintegrantescomite SET docIdentidad=?, idComite=?, estado=?, periodo=? 
WHERE id=?;");

$resultado=$sentencia->execute([$usuario,$comite,$estado,$periodo,$id]);
if ($resultado===TRUE) {
    echo "<h1> Registro guardo con exito. </h1>";
  }

else  {
 echo "<h1> Registro no guardo con exito. </h1> <br/>";
}

echo "<h1> <a href='../reuniones.php' </a> Regresar al Formulario </h1>";

?>