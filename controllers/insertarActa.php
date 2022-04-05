<?php
include ('../util/conexion.php');

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];
$lugar = $_POST['lugar'];
$objetivo = $_POST['objetivo'];
$listaInvitados = $_POST['listaInvitados'];
$desarrolloAgenda = $_POST['desarrolloAgenda'];
$archivoActa = $_POST['archivoActa'];
$archivoAsistencia = $_POST['archivoAsistencia'];
$usuario = $_POST['usuario'];

$insertar = $connection->prepare("INSERT INTO tblacta (titulo, fecha, horaInicio,	horaFin, lugar, objetivo, listaInvitados, desarrolloAgenda,	archivoActa,	archivoAsistencia, usuario )
 VALUES ('$titulo','$fecha','$horaInicio','$horaFin','$lugar','$objetivo','$listaInvitados','$desarrolloAgenda','$archivoActa','$archivoAsistencia', '$usuario' )");
 $insertar->execute();

if ($insertar) {
	        echo "<h1> Registro guardo con exito. <a href='../actas.php' </a>Ver Actas</h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='../crearActa.php' </a> Regresar al Formulario </h1>";


 ?>
  