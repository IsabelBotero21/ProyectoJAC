<?php
include ('../util/conexion.php');
if(!isset($_GET['id'])){
    exit();
}
$documento=$_GET['id'];
$consulta=$connection->prepare("DELETE FROM tblusuario WHERE docIdentidad=?;");
$resultado=$consulta->execute([$documento]);

if ($resultado) {
    echo "<script> alert('El registro fue Eliminado'); 	location.href='../usuarios.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Eliminado'); 	location.href='../usuarios.php'; </script>";
  }
?>
