<?php
include("util/conexion.php");
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
$sel = $connection->prepare("SELECT * FROM tblusuario");
$sel->setFetchMode(PDO::FETCH_ASSOC);
$sel->execute();
?>
<?php if ($_SESSION['perfil']==1):?>
<?php endif ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Usuarios</title>
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Custom style reuniones -->
    <link rel="stylesheet" href="./css/reuniones.css">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
                                        <?php echo ($_SESSION['user_id'] ) ?>
                                    </i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.php" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Perfil</span>
                                    </a>
                                    <a href="controllers/cerrarSesion.php" class="dropdown-item">
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
                    <li class="nav-label first">MENÚ</li>
                    <li><a href="index.php" aria-expanded="false"><i class="fas fa-home"></i><span
                                class="nav-text">Inicio</span></a></li><?php if ($_SESSION['perfil']==2):?>
                    <li><a href="usuarios.php" aria-expanded="false"><i class="fas fa-users"></i><span
                                class="nav-text">Usuarios</span></a></li>
                    <li><a href="reuniones.php" aria-expanded="false"><i class="far fa-handshake"></i><span
                                class="nav-text">Reuniones</span></a></li>
                    <li><a href="actas.php" aria-expanded="false"><i class="fas fa-folder"></i><span
                                class="nav-text">Actas</span></a></li>
                    <li><a href="Documentacion.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Documentacion</span></a></li>
                    <li><a href="comites.php" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                     class="nav-text">Comites</span></a></li><?php endif ?>
                     <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Jac</span></a></li>
                    <li><a href="secretaria.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Secretario</span></a></li>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Usuarios</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-rounded btn-info add-reunion ml-auto"
                                onclick="location.href='crearUsuario.php'"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                </span>Crear usuario</button>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Acciones</th>
                                                        <th>Número de Documento</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Dirección</th>
                                                        <th>Teléfono Fijo / Celular</th>
                                                        <th>Correo</th>
                                                        <th>Perfil</th>
                                                        <th>JAC</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sel = $connection->prepare("SELECT * FROM vtauser ");
                                                        $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                        $sel->execute();
                                                        while ($fila = $sel->fetch())
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <a type="button" class="btn btn-primary" href="editarUsuario.php?id=<?php echo "{$fila["docIdentidad"]}" ?>"><i class="far fa-edit"></i></a><br><br>
                                                            <a type="button" class="btn btn-primary" href="controllers/eliminarUsuario.php?id=<?php echo "{$fila["docIdentidad"]}" ?>"><i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td><?php echo "{$fila["docIdentidad"]}" ?></td>
                                                        <td><?php echo "{$fila["nombres"]}" ?></td>
                                                        <td><?php echo "{$fila["apellidos"]}" ?></td>
                                                        <td><?php echo "{$fila["direccion"]}" ?></td>
                                                        <td><?php echo "{$fila["telefonoFijo"]}/{$fila["telefonoCelular"]}" ?></td>
                                                        <td><?php echo "{$fila["email"]}" ?></td>
                                                        <td><?php echo "{$fila["descripcion"]}" ?></td>
                                                        <td><?php echo "{$fila["estado"]}" ?></td>
                                                    </tr>
                                                    <?php

                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="./vendor/global/global.min.js"></script>
                <script src="./js/quixnav-init.js"></script>
                <script src="./js/custom.min.js"></script>
                <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
                <script src="./js/plugins-init/datatables.init.js"></script>
            </div>
        </div>
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