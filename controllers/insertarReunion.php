<?php
if(!isset($_POST['id'])){
   exit();
}
include ('../util/conexion.php');
$id=$_POST['id'];
$usuario = $_POST['usuario'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$seguimiento = $_POST['seguimiento'];
$comiteEncargado = $_POST['comiteEncargado'];
$horaFin = $_POST['horaFinal'];
$lugar = $_POST['lugar'];
$descripcion = $_POST['descripcion'];
$acta = $_POST['acta'];

$stmt = $connection->prepare("INSERT INTO tblactividad (descripcion,encargado,comiteEncargado,
fecha,horaInicio,horaFinal,lugar,seguimiento,acta)
 VALUES('$descripcion','$usuario','$comiteEncargado','$fechaInicio','$horaInicio','$horaFin','$lugar',
 '$seguimiento','$acta')");

 $stmt->execute();

 if ($stmt) {
   echo "<script> alert('El registro fue Exitoso'); 	location.href='../reuniones.php'; </script>";
 }
 else  {
  echo "<script> alert('El registro no fue Exitoso'); 	location.href='../reuniones.php'; </script>";
 }
 ?>