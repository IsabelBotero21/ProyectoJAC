<?php
//include ('../util/conexion.php');

//@$nombre = $_POST['nombre'];
//@$jac = $_POST['jac'];
//@$estado = $_POST['estado'];

//$insertar = $connection->prepare("INSERT INTO tblcomite
//(nombre,jac,estado)
// VALUES('$nombre','$jac','$estado')");

// $insertar->execute();

//if ($insertar) {
 //   echo "<script> alert('El registro fue Exitoso'); 	location.href='../comite.php'; </script>";
//}
//else  {
//    echo "<script> alert('El registro no fue Exitoso'); 	location.href='../comite.php'; </script>";
//}

?>
<?php
if(!isset($_POST['oculto'])){
   exit();
}
include ('../util/conexion.php');

@$nombre = $_POST['nombre'];
@$jac = $_POST['jac'];


$stmt = $connection->prepare("INSERT INTO tblcomite(nombre,jac) VALUES(?,?);");
$resultado = $stmt->execute([$nombre,$jac]);
if ($resultado) {
   echo "<script> alert('El registro fue Exitoso'); 	location.href='../comites.php'; </script>";
}
else  {
  echo "<script> alert('El registro no fue Exitoso'); 	location.href='../comites.php'; </script>";
}

 ?>