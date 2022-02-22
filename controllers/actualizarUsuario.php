<?php 
include ('../util/conexion.php');
echo $_POST['documento'];
$numeroDocumento = isset($_POST['documento']);
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
// SET `nombres`= :nombres, `apellidos` = :apellidos, `profesion` = :profesion, `estado` = :estado, `fregis` = :fregis
// WHERE `id` = :id";

// $ins = $connection->prepare("UPDATE tblusuario SET 
//                             telefonoFijo = $telefonoFijo,
//                             clave = $clave,
//                             nombres = $nombres,
//                             telefonoCelular = $celular,
//                             apellidos = $apellidos,
//                             perfil = $perfil,
//                             foto = $foto,
//                             direccion = $direccion,  WHERE docIdentidad = $numeroDocumento");


// $ins->execute();
if (true) {
	        echo "<h1> Registro guardo con exito. </h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";

 ?>