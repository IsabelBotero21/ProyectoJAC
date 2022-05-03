<?php

include("../util/conexion.php");
session_start();
 

if(!isset($_POST['oculto'])){
    exit();
 }

$id=$_POST['id'];
$descripcion = $_POST['descripcion'];
$jac = $_POST['jac'];
$tipoDocumento = $_POST['tipoDocumento'];
$usuario = $_POST['usuario'];
$archivoAsistencia =$_POST['archivoAsistencia'];

$sentencia=$connection->prepare("UPDATE tbldocumentacion
SET descripcion=?, jac=?, archivo=?, tipodocumentacion=?, usuario=?
WHERE id=?;");

$resultado=$sentencia->execute([$descripcion,$jac,$archivoAsistencia,$tipoDocumento,$usuario,$id]);
if ($resultado) {
    echo "<script> alert('El registro fue Actualizado'); 	location.href='../Documentacion.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Actualizado'); 	location.href='../Documentacion.php'; </script>";
  }
?>