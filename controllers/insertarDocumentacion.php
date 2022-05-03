<?php
if(!isset($_POST['id'])){
   exit();
}
include ('../util/conexion.php');

$descripcion = $_POST['descripcion'];
$jac = $_POST['jac'];
$tipoDocumento = $_POST['tipoDocumento'];
$usuario = $_POST['usuario'];
$archivoAsistencia =$_POST['archivoAsistencia'];

$stmt = $connection->prepare("INSERT INTO tbldocumentacion (descripcion,jac,archivo,tipodocumentacion,usuario)
 VALUES(?,?,?,?,?);");
 $resultado = $stmt->execute([$descripcion,$jac,$archivoAsistencia,$tipoDocumento,$usuario]);
if ($resultado==TRUE){
   header('location:../Documentacion.php');
}

 ?>