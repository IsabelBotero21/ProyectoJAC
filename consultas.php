<?php
//conexion a la base de datos
include("util/conexion.php");
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
    <title>Inicio</title>
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Custom style reuniones -->
  
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
                            <!--llamado al nombre del usuario que se mostrara en el header-->
                            <li class="nav-item dropdown header-profile">
                            <a class="Nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"> 
                                        <?php echo ($_SESSION['user_id'] ) ?>
                                    </i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="perfil.php" class="dropdown-item">
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
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">MENU</li>
                    <li><a href="index.php" aria-expanded="false"><i class="fas fa-home"></i>
                    <?php if ($_SESSION['perfil']==1): ?>
                        <span
                                class="nav-text">Inicio</span></a></li>
                                <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                     class="nav-text">Jac</span></a></li>
                     <li><a href="secretaria.php" aria-expanded="false"><i class="fas fa-book"></i><span
                     class="nav-text">Secretario</span></a></li>
                     <li><a href="gestiones.php" aria-expanded="false"><i class="mdi mdi-account-search"></i><span
                                class="nav-text">Gestiones</span></a></li>
                                
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
       <!--título inicial-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Consultas</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered verticle-middle table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <!--circulo pequeño mostrado en la tabla-->
                                                    <th scope="col"><center><div class="bootstrap-badge">
                                                        <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                        </div></center>
                                                    </th>
                                                    <!--circulo pequeño mostrado en la tabla-->
                                                    <th scope="col"><center><div class="bootstrap-badge">
                                                        <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                        </div></center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><!--inicio de ventana modal-->
                                    <center><!-- Botón de la ventana modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Información básica de todos los usuarios</button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Información básica de todos los usuarios  que conforman las JAC </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"><div class="tab-content pt-3">
                                                <div class="default-tab">
                                                <div class="default-tab">
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Número de Documento</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Correo</th>
                                                        <th>Perfil</th>
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
                                                        <td><?php echo "{$fila["docIdentidad"]}" ?></td>
                                                        <td><?php echo "{$fila["nombres"]}" ?></td>
                                                        <td><?php echo "{$fila["apellidos"]}" ?></td> 
                                                        <td><?php echo "{$fila["email"]}" ?></td>
                                                        <td><?php echo "{$fila["descripcion"]}" ?></td>
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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div></center><!--fin de la ventana modal--></td>
                                                    <td>
                                                        <center> <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalpopover">Datos básicos de todas las actas generadas</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Datos básicos de todas las actas generadas por los secretarios de las JAC</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="default-tab">
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                        <th>Título</th>
                                                        <th>Fecha</th>
                                                        <th>Lugar</th>
                                                        <th>Objetivo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $sel = $connection->prepare("SELECT * FROM tblacta");
                                                        $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                        $sel->execute();
                                                        while ($fila = $sel->fetch())
                                                        {
                                                    ?>
                                                     <tr>
                                                   
                                                        <td><?php echo "{$fila["titulo"]}" ?></td>
                                                        <td><?php echo "{$fila["fecha"]}" ?></td>
                                                        <td><?php echo "{$fila["lugar"]}"?></td>
                                                        <td><?php echo "{$fila["objetivo"]}" ?></td>

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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                               </div>
                                             </div>
                                           </div></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <!--circulo pequeño mostrado en la tabla-->
                                                    <td><center>
                                                    <div class="bootstrap-badge">
                                                            <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                            </div>
                                                    </center></td>
                                                    <!--circulo pequeño mostrado en la tabla-->
                                                    <td>
                                                        <center><div class="bootstrap-badge">
                                                            <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                            </div></center>
                                                    </td>
                                                    </tr>
                                                   <tr>
                                                    <td><center> <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Actividades programadas por todos los secretarios</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Actividades programadas por todos los secretarios de las JAC</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--inicio de la tabla-->
                                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead style="width: 100px;"> 
                                                    <tr>
                                                    <th>Fecha</th>
                                                    <th>Descripción</th>
                                                    <th>Lugar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--consulta a la tabla de la base de datos-->
                                                    <?php $sel= $connection->prepare("SELECT * FROM tblactividad  ");
                                                    $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                    $sel->execute();
                                                    while($fila=$sel->fetch())
                                                    {
                                                    ?>
                                                    <tr>
                                                        <!--registros llamados de la base de datos-->
                                                    <td><?php echo  "{$fila ["fecha"]}" ?></td>
                                                    <td><?php echo  "{$fila ["descripcion"]}" ?></td>
                                                    <td><?php echo  "{$fila ["lugar"]}" ?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                   </table>
                                                  </div>
                                                 </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div></center><!--fin de ventana modal--></td>
                                            <td>
                                            <!--inicio de ventana modal--><center>
                                    <!-- Botón que conduce a la ventana modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalGrid">Integrantes comités de todas las JAC</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalGrid">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Datos básicos de todos los integrantes de los comités</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="default-tab">
                                <!--inicio de la tabla en la ventana-->
                                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                <tr>
                                                <tr>
                                                                                                        
                                                        <th>Nombres y Apellidos</th>
                                                        <th>Comité</th>
                                                        <th>Tiempo Electo</th>
                                                </tr>
                                                </thead>
                                                        <tbody>
                                                            <!--llamado a la tabla de la base de datos-->
                                                        <?php
                                                        $sel= $connection->prepare("SELECT * FROM  vtaintegrantescomite ");
                                                        $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                        $sel->execute();
                                                        while($integrante = $sel->fetch()){
                                                        ?>
                                                        <tr>   
                                                        <!--registros llamdos de la base de datos--> 
                                                        <td><?php echo "{$integrante["nombres"]} {$integrante["apellidos"]}";?></td>
                                                        <td><?php echo "{$integrante["nombre"]}";?></td>
                                                        <td><?php echo "{$integrante["fechaInicio"]} - {$integrante["fechaFinal"]}";?></td>
                                                        
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                 </div>
                                                 <!--finde la tabla-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                </div>
                                               </div>
                                             </div>
                                        </div></center><!--fin de la ventana modal-->
                                                </td>
                                                </tr>
                                                <tr>
                                                    <!--circulo pequeño mostrado en la tabla-->
                                                    <td><center><div class="bootstrap-badge">
                                                        <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                        </div></center></td>
                                                    <td>
                                                        <!--circulo pequeño mostrado en la tabla-->
                                                        <center><div class="bootstrap-badge">
                                                            <a  class="badge badge-circle badge-outline-primary"><i class="mdi mdi-account-search"></i></a>
                                                            </div></center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--fin de la tabla-->
                                        <!--Botón de volver que conduce a la pantalla de gestiones-->
                                        <div class="form-group">
                                    <br><br><button type="reset" class="btn btn-primary" onclick="location.href='gestiones.php'">volver</button>
                                             </div>
                                    </div>
                                </div>
                            </div>
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
        <div  class= "footer bg-dark text-white">
            <div class="copyright">
                <p>© 2021 Copyright: Todos los derechos reservados a</p>
                <p>..........</p>
            </div>
        </div>
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
</body>

</html>