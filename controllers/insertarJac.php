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

 if ($resultado==TRUE){
    header('location:../jac.php');
 }else{
    echo "El registro no fue creado";
}
 ?>
  