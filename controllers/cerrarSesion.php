<?php
//Iniciar una nueva sesión o reanudar la existente
session_start();
//Destruye la variable especificada
unset ($_SESION['user_id']);
//Destruye toda la información registrada en la sesión
session_destroy();

//nos envia a el index o inicio
header('location: ../index.php');
?>