<?php
if (isset($_GET['id'])) {
    exit;
}

session_start();
include('../util/conexion.php');

//print_r($persona)
$id=$_POST['id'];
$descripcion = $_POST['descripcion'];
$usuario = $_POST['usuario'];
$comiteEncargado = $_POST['comiteEncargado'];
$fechaInicio = $_POST['fechaInicio'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFinal'];
$lugar = $_POST['lugar'];
$seguimiento = $_POST['seguimiento'];
$acta = $_POST['acta'];

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
