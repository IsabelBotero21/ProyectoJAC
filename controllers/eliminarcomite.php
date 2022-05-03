<?php 
include ('../util/conexion.php');

$id =$_REQUEST['id'];

$ins = $connection -> query("DELETE FROM tblcomite WHERE id =" .$id);

if ($ins) {
	echo "<script> alert('El registro fue eliminado'); 	location.href='../comites.php'; </script>";
  }
  else  {
   echo "<script> alert('Error'); 	location.href='../comites.php'; </script>";
  }

 ?>