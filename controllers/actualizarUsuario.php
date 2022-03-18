<?php 
session_start();
include ('../util/conexion.php');
$numeroDocumento = $_SESSION['doc_update'];
$telefonoFijo = "`telefonoFijo` = '{$_POST['telefonoFijo']}',";
$clave = "`clave` = '{$_POST['clave']}',";
$nombres = "`nombres` = '{$_POST['nombres']}',";
$celular = "`telefonoCelular` = '{$_POST['celular']}',";
$fechaNacimiento = $_POST['fechaNacimiento'];
$apellidos = "`apellidos` = '{$_POST['apellidos']}',";
$perfil = empty($_POST['perfil']) ? '':"`perfil` = {$_POST['perfil']},";
$foto = empty($_POST['foto']) ? '':"foto = '{$_POST['foto']}',";
$direccion = "`direccion` = '{$_POST['direccion']}' ";
$email = "`email` = '{$_POST['email']}',";

$strSQL = "UPDATE tblusuario SET 
               $telefonoFijo
               $clave
               $nombres
               $celular
               $apellidos
               $perfil
               $foto
               $email
               $fechaNacimiento
               $direccion WHERE docIdentidad = $numeroDocumento";

$ins = $connection->prepare($strSQL);
$ins->execute();
if (true) {
	        echo "<h1> Registro guardo con exito. </h1>";
          }

else  {
	     echo "<h1> Registro no guardo con exito. </h1> <br/>";
      }

 echo "<h1> <a href='../usuarios.php' </a> Regresar a USUARIOS </h1>";

 ?>