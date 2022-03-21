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
	        echo "<h1> Registro guardo con exito. </h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='../reuniones-formulario.php' </a> Regresar al Formulario </h1>";


 ?>