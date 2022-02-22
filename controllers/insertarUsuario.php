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

$ins = $connection->prepare("INSERT INTO tblusuario (docIdentidad,nombres,apellidos,direccion,telefonoFijo, telefonoCelular,email,clave,fechaNacimiento,foto,perfil) VALUES ('$numeroDocumento','$nombres','$apellidos','$direccion','$telefonoFijo','$celular','$email','$clave','$fechaNacimiento','$foto','$perfil')");


$ins->execute();
if ($ins) {
	        echo "<h1> Registro guardo con exito. </h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";

 ?>