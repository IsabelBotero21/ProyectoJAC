<?php 

include ('../util/conexion.php');

$formErr = false;
$numeroDocumentoErr = $claveErr = $nombresErr = $celularErr = $fechaNacimientoErr = $perfilErr = $direccionErr = $emailErr = "";

if(empty($_POST["documento"])){
     $numeroDocumentoErr = "Número de documento es requerido";
     $_GET['numeroDocumentoErr'] = $numeroDocumentoErr;
     $formErr = true;
}

if(empty($_POST["clave"])){
     $claveErr = "Contraseña es requerida";
     $_GET['claveErr'] = $claveErr;
     $formErr = true;
}

if(empty($_POST["nombres"])){
     $nombresErr = "Los nombres es requerido";
     $_GET['nombresErr'] = $nombresErr;
     $formErr = true;
}

if(empty($_POST["celular"])){
     $celularErr = "Número de celular es requerido";
     $_GET['celularErr'] = $celularErr;
     $formErr = true;
}

if(empty($_POST["fechaNacimiento"])){
     $fechaNacimientoErr = "Fecha de nacimiento es requerido";
     $_GET['fechaNacimientoErr'] = $fechaNacimientoErr;
     $formErr = true;
}

if(empty($_POST["perfil"])){
     $perfilErr = "Perfil es requerido";
     $_GET['perfilErr'] = $perfilErr;
     $formErr = true;
}

if(empty($_POST["direccion"])){
     $direccionErr = "La dirección es requerida";
     $_GET['direccionErr'] = $direccionErr;
     $formErr = true;
}

if(empty($_POST["email"])){
     $emailErr = "El correo electrónico es requerido";
     $_GET['emailErr'] = $emailErr;
     $formErr = true;
}

if($formErr == true){
     header("Location: ../crearUsuario.php");
}


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
     echo "<script> alert('El registro fue Exitoso'); 	location.href='../usuarios.php'; </script>";
   }
   else  {
    echo "<script> alert('El registro no fue Exitoso'); 	location.href='../usuarios.php'; </script>";
   }
 ?>