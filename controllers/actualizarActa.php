
<?php 
if(isset($_POST['login'])){
    header('Location: actas.php');
}

include ('../util/conexion.php');
@$id2 = $_POST['id2'];
@$titulo2 = $_POST['titulo2'];
@$fecha2 = $_POST['fecha2'];
@$horaInicio2 = $_POST['horaInicio2'];
@$horaFin2 = $_POST['horaFin2'];
@$lugar2 = $_POST['lugar2'];
@$objetivo2 = $_POST['objetivo2'];
@$listaInvitados2 = $_POST['listaInvitados2'];
@$desarrolloAgenda2 = $_POST['desarrolloAgenda2'];
@$archivoActa2 = $_POST['archivoActa2'];
@$archivoAsistencia2 = $_POST['archivoAsistencia2'];
@$usuario2 = $_POST['usuario2'];

$up = $connection->prepare("UPDATE tblacta SET titulo = ?, fecha = ?, horaInicio = ?, 
horaFin = ?, lugar = ?, objetivo = ?, listaInvitados = ?, desarrolloAgenda = ?,
archivoActa = ?, archivoAsistencia = ?, usuario = ? WHERE id = ?;");
$resultado = $up->execute([$titulo2,$fecha2,$horaInicio2,$horaFin2,$lugar2,$objetivo2,$listaInvitados2,$desarrolloAgenda2,
$archivoActa2,$archivoAsistencia2,$usuario2, $id2]);

if ($resultado) {
    echo "<script> alert('El registro fue Actualizado'); 	location.href='../actas.php'; </script>";
  }
  else  {
   echo "<script> alert('El registro no fue Actualizado'); 	location.href='../actas.php'; </script>";
  }
 ?>
s