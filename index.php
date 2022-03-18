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
    <title>Home</title>
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
                                class="nav-text">Home</span></a></li>
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
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Orders</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-success">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="./images/avatar/1.png"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="flotBar2" class="flot-chart"></div>
                            </div>
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
            <div class="container">
                <nav class="row">

                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase">Contáctenos</li>
                            <li><a href="#" class="text-reset"> <i class="fab fa-instagram"></i> Nombre de Usaurio</a>
                            </li>
                            <li><a href="#" class="text-reset"><i class="fab fa-facebook-f"></i> Nombre de Usuario</a>
                            </li>
                            <li><a href="#" class="text-reset"><i class="fab fa-twitter"></i> Nombre de Usuario</a></li>


                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-6">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase">¿Quienes Somos?</li>
                            <p>​Somos una historia de trabajo y esfuerzo continuo que año tras año nos va reforzando
                                gracias al apoyo de nuestros proveedores y fidelidad de nuestros clientes.
                                La misión, visión y valores de Isaac Lema están dirigidos a satisfacer las necesidades
                                de nuestros clientes</p>
                        </ul>
                    </div>
                    <div class="col-sm-2 col-md-3 col-lg-3">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase">PQRS</li>
                            <li class="d-flex justify-content-between ">
                                <p>Si tiene peticiones, quejas, reclamos o sugerencias haga clic en el enlace <a
                                        href="#" style="color: rgb(133, 133, 212);"> Gmail </a></p>

                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
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