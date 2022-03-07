<?php
include ('../util/conexion.php');

$usuario = $_POST['usuario'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$seguimiento = $_POST['seguimiento'];
$comiteEncargado = $_POST['comiteEncargado'];
$horaFin = $_POST['horaFin'];
$lugar = $_POST['lugar'];
$descripcion = $_POST['descripcion'];
$acta = $_POST['acta'];

$insertar = $connection->prepare("INSERT INTO tblactividad (descripcion,encargado,comiteEncargado,
fecha,horaInicio,horaFinal,lugar,seguimiento,acta)
 VALUES('$descripcion','$usuario','$comiteEncargado','$fechaInicio','$horaInicio','$horaFin','$lugar',
 '$seguimiento','$acta')");

 $insertar->execute();

if ($insertar) {
	        echo "<h1> Registro guardo con exito. </h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";


 ?>
  