<?php 
include ('../util/conexion.php');

$id =$_REQUEST['id'];

$ins = $connection -> query("DELETE FROM tblacta WHERE id =" .$id);

if ($ins) 

{
	header('Location: ../actas.php');
}

else{
	
	echo "<script> alert('El registro fue eliminado'); 	location.href='../actas.php'; </script>";
}

 ?>