<?php
include ('../util/conexion.php');
session_start();
if(!isset($_POST['oculto'])){
	exit();
}


   $id = $_POST['id'];
	@$nombre = $_POST['nombre'];
	@$jac = $_POST['jac'];

	$consulta=$connection->prepare("UPDATE 
   tblcomite SET  nombre = ?, jac = ? WHERE id = ?;");
	$resultado = $consulta->execute([$nombre,$jac,$id]);

	if ($resultado) {
		echo "<script> alert('Registro Actualizado'); 	location.href='../comites.php'; </script>";
	}
	else  {
	   echo "<script> alert('Error!'); 	location.href='../comites.php'; </script>";
	}
?>