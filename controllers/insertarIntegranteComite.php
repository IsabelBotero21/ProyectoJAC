<?php
if(!isset($_POST['oculto'])){
   exit();
}
include ('../util/conexion.php');

$usuario = $_POST['usuario'];
$comite = $_POST['comite'];
$periodo = $_POST['periodo'];
$estado =$_POST['estado'];

$stmt = $connection->prepare("INSERT INTO tblintegrantescomite (docIdentidad,idComite,estado,periodo)
 VALUES(?,?,?,?);");
 $resultado = $stmt->execute([$usuario,$comite,$estado,$periodo]);
 if ($resultado) {
	echo "<script> alert('El registro fue Exitoso'); 	location.href='../comites.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Exitoso'); 	location.href='../comites.php'; </script>";
  }
 ?>