<?php
include('../util/conexion.php');
session_start();
if(!isset($_GET['id'])){
    exit();
 }

 $id=$_GET['id'];

$sentencia=$connection->prepare("DELETE FROM tbljac WHERE id=?;");
$resultado=$sentencia->execute([$id]);
if ($resultado) {
  echo "<script> alert('El registro fue Eliminado'); 	location.href='../jac.php'; </script>";
}
else  {
 echo "<script> alert('El registro no fue Eliminado'); 	location.href='../jac.php'; </script>";
}
?>