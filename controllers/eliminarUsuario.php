<?php 
include ('../util/conexion.php');

$numeroDocumento = $_POST['documento'];

$del = $connection -> query("DELETE FROM tblusuario WHERE docIdentidad =" .$documento);

if ($del) 

{
	header('Location: formulario.php');
}

else{
	
echo "<script> alert('El registro no pudo ser eliminado'); 	location.href='formulario.php'; </script>";
}

 ?>