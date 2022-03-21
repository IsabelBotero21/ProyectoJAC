<?php
include ('../util/conexion.php');
$documento=$_REQUEST['id'];
echo $documento;
$consulta=$connection->prepare("DELETE FROM tblusuario WHERE docIdentidad=:documento");
$consulta->bindParam(":documento",$id);
$consulta->execute();

if ($consulta->execute()) {
    echo "Usuario eliminado correctamente";

}else{
    echo "No se ha podido eliminar el usuario";
}
?>

