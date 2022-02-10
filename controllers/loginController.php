<?php
include("../util/conexion.php");
session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $clave =  $_POST['clave'];

    $query = $connection->prepare("SELECT * FROM tblusuario WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(!$result){
        echo '<p> el correo o contraseña son invalidos, por favor verifica</p>';
    }
    if($clave === $result['clave']){
        echo "clave correcta";
        $_SESSION['user_id'] = $result['docIdentidad'];
        echo "Login correcto";
        header("HTTP/1.1 302 Moved Temporarily"); 
        header("Location: ../index.php"); 
    }else{
        echo '<p> el correo o contraseña son invalidos, por favor verifica</p>';
    }
}else{
    echo "no isset login";
}

?>