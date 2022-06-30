<?php
   include("../util/conexion.php");
   session_start();

   $documento=$_POST['documento'];
   $nombres=$_POST['nombres'];
   $apellidos=$_POST['apellidos'];
   $direccion=$_POST['direccion'];
   $telefonoFijo=$_POST['telefonoFijo'];
   $telefonoCelular=$_POST['celular'];
   $email=$_POST['email'];
   $clave=$_POST['clave'];
   $fechaNacimiento=$_POST['fechaNacimiento'];
   $foto=$_POST['foto'];
   $perfil=$_POST['perfil'];

   $consulta=$connection->prepare("UPDATE tblusuario SET nombres = ?, apellidos = ?, direccion = ?, telefonoFijo = ?, telefonoCelular = ?, email = ?, clave = ?, fechaNacimiento = ?, foto = ?, perfil = ? WHERE docIdentidad = ?;");

   $resultado = $consulta->execute([$nombres,$apellidos,$direccion,$telefonoFijo,$telefonoCelular,$email,$clave,$fechaNacimiento,$foto,$perfil,$documento]);

   if ($resultado) {
    echo "<script> alert('El registro fue Actualizado'); 	location.href='../usuarios.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Actualizado'); 	location.href='../usuarios.php'; </script>";
  }
?>