<?php 

include ('../util/conexion.php');


$numeroDocumento = $_POST['documento'];
$telefonoFijo = $_POST['telefonoFijo'];
$clave = $_POST['clave'];
$nombres = $_POST['nombres'];
$celular = $_POST['celular'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$apellidos = $_POST['apellidos'];
$perfil = $_POST['perfil'];
$foto = $_POST['foto'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$estado = ($_POST['estado'] == 'on') ? 1 : 0;

$ins = $connection->prepare("INSERT INTO tblusuario (docIdentidad,nombres,apellidos,direccion,telefonoFijo, telefonoCelular,email,clave,fechaNacimiento,foto,perfil,estado) VALUES ('$numeroDocumento','$nombres','$apellidos','$direccion','$telefonoFijo','$celular','$email','$clave','$fechaNacimiento','$foto','$perfil','$estado')");

$ins->execute();
if ($ins) {
     echo "<script> alert('El registro fue Exitoso'); 	location.href='../usuarios.php'; </script>";
   }
   else  {
    echo "<script> alert('El registro no fue Exitoso'); 	location.href='../usuarios.php'; </script>";
   }
 ?>