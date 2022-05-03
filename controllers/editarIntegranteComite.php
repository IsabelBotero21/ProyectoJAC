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
$estado = ($_POST['estado'] == 'on') ? 1 : 0;

$sentencia=$connection->prepare("UPDATE tblintegrantescomite SET docIdentidad=?, idComite=?, estado=?, periodo=? 
WHERE id=?;");

$resultado=$sentencia->execute([$usuario,$comite,$estado,$periodo,$id]);
if ($resultado) {
	echo "<script> alert('El registro fue Actualizado'); 	location.href='../comites.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Actualizado'); 	location.href='../comites.php'; </script>";
  }
?>