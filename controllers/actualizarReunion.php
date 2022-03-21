<?php
if (isset($_GET['id'])) {
    exit;
}

session_start();
include('../util/conexion.php');
<<<<<<< HEAD

//print_r($persona)
$id=$_POST['id'];
$descripcion = $_POST['descripcion'];
=======
//$id=$_POST['id'];
$id = $_SESSION['idReunion'];
>>>>>>> 62a555b0c87e5cb7c9e9d0311de894111077177e
$usuario = $_POST['usuario'];
$comiteEncargado = $_POST['comiteEncargado'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFinal'];
$lugar = $_POST['lugar'];
$seguimiento = $_POST['seguimiento'];
$acta = $_POST['acta'];
<<<<<<< HEAD
=======
 
$strSQL="UPDATE tblactividad SET
$descripcion 
$usuario
$comiteEncargado
$fechaInicio
$horaInicio 
$horaFin
$lugar
$seguimiento
$acta WHERE id= $id";
$insertar=$connection->prepare($strSQL);
$insertar->execute();
>>>>>>> 62a555b0c87e5cb7c9e9d0311de894111077177e

$stmt=$connection->prepare("UPDATE tblactividad SET descripcion=?, encargado=?, comiteEncargado=?, fecha=?,
horaInicio=?, horaFinal=?, lugar=?, seguimiento=?, acta=? WHERE  id=?;");
$resultado=$stmt->execute([$descripcion, $usuario, $comiteEncargado, $fechaInicio, $horaInicio, $horaFin,
$lugar, $seguimiento, $acta, $id]);
if ($resultado) {
    echo "<h1> Registro guardo con exito. </h1>";
    echo $lugar;
  }

else  {
 echo "<h1> Registro no guardo con exito. </h1> <br/>";
}

echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";


?>
