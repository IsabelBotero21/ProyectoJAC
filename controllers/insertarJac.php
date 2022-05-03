<?php
include ('../util/conexion.php');

$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$municipio = $_POST['municipio'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['gmail'];

$insertar = $connection->prepare("INSERT INTO tbljac (nit,nombre,municipio,direccion,telefono,email)
 VALUES(?,?,?,?,?,?);");
 $resultado = $insertar->execute([$nit,$nombre,$municipio,$direccion,$telefono,$email]);

 if ($resultado) {
   echo "<script> alert('El registro fue Exitoso'); 	location.href='../jac.php'; </script>";
 }
 else  {
  echo "<script> alert('El registro no fue Exitoso'); 	location.href='../jac.php'; </script>";
 }
 ?>
  