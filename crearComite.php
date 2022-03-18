<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>comite</title>
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Custom style reuniones -->
    <link rel="stylesheet" href="./css/reuniones.css">
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
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Cerrar sesión </span>
                                    </a>
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
                    <li class="nav-label first">MENU</li>
                    <li><a href="index.html" aria-expanded="false"><i class="fas fa-home"></i><span
                                class="nav-text">Home</span></a></li>
                    <li><a href="usuarios.html" aria-expanded="false"><i class="fas fa-users"></i><span
                                class="nav-text">Usuarios</span></a></li>
                    <li><a href="reuniones.php" aria-expanded="false"><i class="far fa-handshake"></i><span
                                class="nav-text">Reuniones</span></a></li>
                    <li><a href="actas.html" aria-expanded="false"><i class="fas fa-folder"></i><span
                                class="nav-text">Actas</span></a></li>
                    <li><a href="Documentacion.html" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Documentacion</span></a></li>
                    <li><a href="comites.php" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                                class="nav-text">Comites</span></a></li>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Crear Comite</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="sr-only">JAC</label>
                                    <input type="text" class="form-control mb-2" placeholder="JAC">
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only">NOMBRE</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-auto"><br>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Estado
                                        </label>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mb-2">Crear</button>
                                    <button type="submit" class="btn btn-primary mb-2">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
              <br><br><br><br><br><br><br><br><br><br>    
         <footer class=" bg-dark text-white py-3">
            <div class="container">
                <nav class="row">
                
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase" >Contáctenos</li>
                            <li ><a href="#" class="text-reset"> <i class="fab fa-instagram" ></i>  Nombre de Usaurio</a></li>
                            <li ><a href="#" class="text-reset"><i class="fab fa-facebook-f"></i>  Nombre de Usuario</a></li>
                            <li ><a href="#" class="text-reset"><i class="fab fa-twitter"></i> Nombre de Usuario</a></li>
                            
                            
                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-6">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase" >¿Quienes Somos?</li>
                            <p>​Somos una historia de trabajo y esfuerzo continuo que año tras año nos va reforzando gracias al apoyo de nuestros proveedores y fidelidad de nuestros clientes.
                                La misión, visión y valores de Isaac Lema están dirigidos a satisfacer las necesidades de nuestros clientes</p>
                        </ul>
                    </div>
                    <div class="col-sm-2 col-md-3 col-lg-3">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase" >PQRS</li>
                            <li class="d-flex justify-content-between " >
                                <p>Si tiene peticiones, quejas, reclamos o sugerencias haga clic en el enlace <a href="#" style="color: rgb(133, 133, 212);"> Gmail </a></p>
                                
                            </li>
                            
                        </ul>
                    </div>
                    
                </nav>
            </div>
        <div class="text-center p-3" style="background-color: rgba(22, 16, 16, 0.2);">
            © 2021 Copyright: Todos los derechos reservados a..........
        </div>
        </footer>
        </div>

    </div>
    
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>