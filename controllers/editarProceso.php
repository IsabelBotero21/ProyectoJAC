<?php

include("../util/conexion.php");
session_start();
 

if(!isset($_POST['oculto'])){
    exit();
 }

$id=$_POST['id'];
$descripcion = $_POST['descripcion'];
$usuario = $_POST['usuario'];
$comiteEncargado = $_POST['comiteEncargado'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFinal'];
$lugar = $_POST['lugar'];
$seguimiento = $_POST['seguimiento'];
$acta = $_POST['acta'];

$sentencia=$connection->prepare("UPDATE tblactividad SET descripcion=?, encargado=?, comiteEncargado=?, fecha=?,
horaInicio=?, horaFinal=?, lugar=?, seguimiento=?, acta=? WHERE id=?;");

$resultado=$sentencia->execute([$descripcion,$usuario,$comiteEncargado,$fechaInicio,$horaInicio,
$horaFin,$lugar,$seguimiento,$acta, $id]);
if ($resultado===TRUE) {
    echo "<h1> Registro guardo con exito. </h1>";
  }

else  {
 echo "<h1> Registro no guardo con exito. </h1> <br/>";
}

echo "<h1> <a href='../reuniones.php' </a> Regresar al Formulario </h1>";

?>