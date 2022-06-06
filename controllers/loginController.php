<?php
include("../util/conexion.php");
session_start();

if(isset($_POST['login'])){
    $docIdentidad = $_POST['docIdentidad'];
    $clave = $_POST['clave'];

    $query = $connection->prepare("SELECT * FROM tblusuario WHERE docIdentidad=:docIdentidad");
    $query->bindParam("docIdentidad", $docIdentidad, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    if($clave === $result['clave']){
        echo "clave correcta";
        $_SESSION['user_id'] = $result['nombres'];
        $_SESSION['perfil'] = $result['perfil'];
        $_SESSION['docIdentidad'] = $result['docIdentidad'];

        // $_SESSION['JAC'] = $result[]
        echo "Login correcto";
        header("HTTP/1.1 302 Moved Temporarily"); 
        header("Location: ../index.php"); 
    }else{
        echo "<script> alert('El correo o contraseña son invalidos, por favor verifica'); 	location.href='../page-login.php'; </script>";
    }
}else{
    echo "no isset login";
}

?>
