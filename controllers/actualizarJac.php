
<?php 
if(isset($_POST['login'])){
    header('Location: jac.php');
}

include ('../util/conexion.php');
@$id2 = $_POST['id2'];
@$nit2 = $_POST['nit2'];
@$nombre2 = $_POST['nombre2'];
@$municipio2 = $_POST['municipio2'];
@$direccion2 = $_POST['direccion2'];
@$telefono2 = $_POST['telefono2'];
@$email2 = $_POST['gmail'];

$up = $connection->prepare("UPDATE tbljac SET nit = ?, nombre = ?, municipio = ?, 
direccion = ?, telefono = ?, email = ? WHERE id = ?;");
$resultado = $up->execute([$nit2,$nombre2,$municipio2,$direccion2,$telefono2,$email2, $id2]);

if ($resultado === TRUE) {
	        
    header('Location: ../jac.php');
 }
else{

    echo "Error";
 
} 

 ?>
