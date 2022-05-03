<?php 
include ('../util/conexion.php');

$id =$_REQUEST['id'];

$ins = $connection -> query("DELETE FROM tblacta WHERE id =" .$id);

if ($ins) {
	echo "<script> alert('El registro fue Eliminado'); 	location.href='../actas.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Eliminado'); 	location.href='../actas.php'; </script>";
  }
 ?>