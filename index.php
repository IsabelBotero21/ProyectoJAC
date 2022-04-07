<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Inicio</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="icons/bandera2.jpg" alt="">
                <img class="brand-title" src="./images/mj.jpeg" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                </span>
                            </div>
                        </div>
                        <h2>Junta Acción Comunal Abejorral - Antioquia</h2>
                        <ul class="navbar-nav header-right">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-unstyled">
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-user"></i></span>
                                        <div class="media-body">
                                </ul>
                            </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                    <!---<a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Cerrar sesión </span>
                                    </a>-->
                                    <!-- /# row -->
                                    <!--<div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                                    <!-- /# card -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">MENÚ</li>
                    <li><a href="index.php" aria-expanded="false"><i class="fas fa-home"></i><span
                                class="nav-text">Inicio</span></a></li>
                    <li><a href="usuarios.php" aria-expanded="false"><i class="fas fa-users"></i><span
                                class="nav-text">Usuarios</span></a></li>
                    <li><a href="reuniones.php" aria-expanded="false"><i class="far fa-handshake"></i><span
                                class="nav-text">Reuniones</span></a></li>
                    <li><a href="actas.php" aria-expanded="false"><i class="fas fa-folder"></i><span
                                class="nav-text">Actas</span></a></li>
                    <li><a href="Documentacion.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Documentacion</span></a></li>
                    <li><a href="comites.php" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                                class="nav-text">Comites</span></a></li>
                    <li><a href="jac.php" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                                class="nav-text">Jac</span></a></li>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="">
            <div class="container-fluid"style=" margin-top:100px;" >


                <div class="row"style="margin-left:600px;">
                    <div class="col-lg-6">
                        <div class="card"  >
                            
                          <img src="icons/escudo.jpg" alt="imagen"      >
                        </div>
                    </div>
                    
                </div>

            </div>
            <!--**********************************
            Content body end
        ***********************************-->

            <!--**********************************
            Footer start
        ***********************************-->
        </div>
        <footer class=" bg-dark text-white py-3">
            <div class="text-center p-3" style="background-color: rgba(22, 16, 16, 0.2);">
                © 2021 Copyright: Todos los derechos reservados a..........
            </div>
        </footer>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>



    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.pie.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>
    <script src="./vendor/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="./js/plugins-init/flot-init.js"></script>
</body>

</html>