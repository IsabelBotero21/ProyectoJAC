<?php
//Conexión bese de datos.
include('util/conexion.php');
session_start();
//Usuario de logueo.
$_SESSION['perfil'];
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
$_SESSION['perfil'];
//Consulta a la tabla documentacion para traer los datos.
$sel = $connection->prepare("SELECT * FROM tbldocumentacion");
$sel->setFetchMode(PDO::FETCH_ASSOC);
$sel->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Documentacion</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/select2/css/select2.min.css">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
            <a href="index.php" class="brand-logo">
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
                            <a class="Nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"> 
                                        <?php echo ($_SESSION['user_id'] ) ?>
                                    </i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="perfil.php" class="dropdown-item">
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
                    <li class="nav-label first">MENÚ</li>
                    <li><a href="index.php" aria-expanded="false"><i class="fas fa-home"></i>
                    <?php if ($_SESSION['perfil']==1): ?>
                        <span
                                class="nav-text">Inicio</span></a></li>
                                <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                     class="nav-text">Jac</span></a></li>
                     <li><a href="secretaria.php" aria-expanded="false"><i class="fas fa-book"></i><span
                     class="nav-text">Secretario</span></a></li>
                     <?php endif ?>

                     <?php if ($_SESSION['perfil']==2 || $_SESSION['perfil']==3 || $_SESSION['perfil']==4 || $_SESSION['perfil']==5 || $_SESSION['perfil']==6 || $_SESSION['perfil']==7 ): ?>
                        <span
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
                     <?php endif ?>
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
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Documentación</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <!-- Control de privilegio segun perfil -->
                        <div class="card-header"><?php if ($_SESSION['perfil']== 2):?>
                            <button type="button" class="btn btn-rounded btn-info add-reunion ml-auto"
                                onclick="location.href='Documentacion-formulario.php'"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                </span>Crear documento</button><?php endif ?>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                  <!--  <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#libro">Documentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#estatutos">Estatutos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#personeriaJuridica">Personería jurídica</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#informes">Informes</a>
                                    </li>  -->
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="libro" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <!-- Control de privilegio segun perfil -->
                                                        <th><?php if ($_SESSION['perfil']== 2):?>Acciones<?php endif ?></th>
                                                        <th>Descripcion</th>
                                                        <th>Jac</th>
                                                        <th>Tipo Documento</th>
                                                        <th>Usuario</th>
                                                        <th>Archivo</th>
                                                        <th>Ver</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                 //Consulta a la tabla documentacion para traer los datos con su respectivo nombre de campo.
                                                $sel= $connection->prepare("SELECT * FROM tbldocumentacion   ");
                                                $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                $sel->execute();
                                                while($documento = $sel->fetch()){
                                                ?>
                                                <tr>
                                                    <!-- Control de privilegio segun perfil --> 
                                                     <td><?php if ($_SESSION['perfil']== 2):?>
                                                        <!-- Botón Actualizar -->
                                                         <a type="button" class="btn btn-primary"href="formulario-editarDocumento.php?id=<?php echo"{$documento["id"]}"?>"><i class="far fa-edit"></i> </a><br><br>
                                                         <!-- Botón Eliminar -->
                                                         <a type="button" class="btn btn-primary" href="controllers/eliminarDocumento.php?id=<?php echo "{$documento["id"]}" ?>"><i class="fa fa-trash-o"></i></a>
                                                     </td><?php endif ?>
                                                     <!-- Mostar los datos Insertados en la tabla con el array -->
                                                     <td><?php echo "{$documento["descripcion"]}";?></td>
                                                     <td><?php echo "{$documento["jac"]}";?></td>
                                                     <td><?php echo "{$documento["tipodocumentacion"]}";?></td>
                                                     <td><?php echo "{$documento["usuario"]}";?></td>
                                                     <td><?php echo "{$documento["archivo"]}";?></td>
                                                     <td><a type="button" class="btn btn-primary" href="web/viewer.html"> <i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="estatutos">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>JAC</th>
                                                        <th>Archivo</th>
                                                        <th>Comite Encargado</th>
                                                        <th>Usuario</th>
                                                        <th>Ver</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="personeriaJuridica">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Descripcion</th>
                                                        <th>Encargado</th>
                                                        <th>Comite Encargado</th>
                                                        <th>Fecha</th>
                                                        <th>Hora Inicio</th>
                                                        <th>Hora Final</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juan Alberto</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="informes">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Descripcion</th>
                                                        <th>Encargado</th>
                                                        <th>Comite Encargado</th>
                                                        <th>Fecha</th>
                                                        <th>Hora Inicio</th>
                                                        <th>Hora Final</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juan Alberto</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                    </tr>
                                                    </tr>
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
        Main wrapper end
    ***********************************-->

            <!--**********************************
        Scripts
    ***********************************-->
            <!-- Required vendors -->
            <script src="./vendor/global/global.min.js"></script>
            <script src="./js/quixnav-init.js"></script>
            <script src="./js/custom.min.js"></script>


            <script src="./vendor/select2/js/select2.full.min.js"></script>
            <script src="./js/plugins-init/select2-init.js"></script>
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