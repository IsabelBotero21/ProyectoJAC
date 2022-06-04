<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crear Acta</title>
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
                                    <i class="mdi mdi-account"> 
                                        <?php echo ($_SESSION['user_id']) ?><br>
                                    </i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.php" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Perfil </span>
                                    </a>
                                    <a href="./page-login.php" class="dropdown-item">
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
                    <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Jac</span></a></li>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Crear Acta</h4>
                        </div>
                    </div>
                </div>
                <!-- inicio insert -->
                <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="controllers/insertarActa.php" method="post" id="" name="">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Título *</label>
                                            <input type="text"  name="titulo" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Fecha *</label>
                                            <input type="date"  name="fecha" min="<?php echo date_format(date_create(), 'Y-m-d'); ?>" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Hora Inicio *</label>
                                            <input type="time"  name="horaInicio" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Hora Fin *</label>
                                                <input type="time" name="horaFin" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Lugar *</label>
                                            <input type="text"  name="lugar" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Objetivo *</label>
                                            <input type="text"  name="objetivo" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Archivo Asistencia *</label>
                                                <input type="file" name="archivoAsistencia" class="form-control input-default " Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Archivo Acta *</label>
                                            <input type="file" name="archivoActa" class="form-control input-default " accept="util/pdf.php" Required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Lista Invitados</label>
                                        <textarea type="text" name="listaInvitados"class="form-control input-default "
                                            ></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Desarrollo Agenda</label>
                                        <textarea type="text" name="desarrolloAgenda"class="form-control input-default "
                                            ></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Usuario *</label>
                                            <input type="text" name="usuario"  class="form-control input-default " readonly required value="<?php echo ($_SESSION['user_id']) ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6"></div>
                                            <p>Los campos con * son requeridos</p>
                                                </div>
                                        <button type="reset" class="btn btn-primary"><a href="actas.php">Cancelar</a></button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                <!-- fin insert-->
        </div>
    </div>
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <!--**********************************
            Footer start
        ***********************************-->
        <div  class= "footer bg-dark text-white">
            <div class="copyright">
                <p>© 2021 Copyright: Todos los derechos reservados a</p>
                <p>..........</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
</body>

</html>