<?php
include ('../util/conexion.php');
if(!isset($_GET['id'])){
    exit();
}
$documento=$_GET['id'];
$consulta=$connection->prepare("DELETE FROM tblusuario WHERE docIdentidad=?;");
$resultado=$consulta->execute([$documento]);

if($resultado){
    header('Location:../usuarios.php');
 }else {
     echo "Error. No se ha podido eliminar su registro";
 }
?>
