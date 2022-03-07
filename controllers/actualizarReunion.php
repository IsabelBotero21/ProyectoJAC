<?php
session_start();
include('../util/conexion.php');

$usuario = $_POST['usuario'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$seguimiento = $_POST['seguimiento'];
$comiteEncargado = $_POST['comiteEncargado'];
$horaFin = $_POST['horaFin'];
$lugar = $_POST['lugar'];
$descripcion = $_POST['descripcion'];
$acta = $_POST['acta'];
 
$strSQL="UPDATE tblactividad SET
$descripcion 
$usuario
$comiteEncargado
$fechaInicio
$horaInicio 
$horaFin
$lugar
$seguimiento
$acta WHERE id=$lugar";
$insertar=$connection->prepare($strSQL);
$insertar->execute();


if (true) {
    echo "<h1> Registro guardo con exito. </h1>";
    
    echo $descripcion ;
echo $usuario;
echo $comiteEncargado;
echo $fechaInicio;
echo $horaInicio ;
echo $horaFin;
echo $lugar;
echo $seguimiento;
echo $acta;

  }

else  {
 echo "<h1> Registro no guardo con exito. </h1> <br/>";
}

echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";
?>