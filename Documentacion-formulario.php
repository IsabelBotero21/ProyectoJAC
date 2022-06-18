<?php
include("util/conexion.php");
session_start();
$_SESSION['perfil'];
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}

    $stmt=$connection->query("SELECT * FROM tbldocumentacion");
    $documento = $stmt->fetchAll(PDO::FETCH_OBJ);
    

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
                    <li class="nav-label first">MENU</li>
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
                            <h4>Registrar Documentación</h4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                        <form action="controllers/insertarDocumentacion.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Descripcion *</label>
                                        <textarea type="text" name="descripcion" class="form-control input-default" value="<?php echo $edit? $actividad["descripcion"]: ""?>"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Jac * </label>
                                        <select name="jac" id="" class="form-control" value="" Required>
                                                                <option selected value="">
                                                                    --Selecciona--
                                                                </option>
                                                    <?php
                                                    $query=$connection->prepare("SELECT * FROM tbljac");
                                                    $query->execute();
                                                    $data=$query->fetchAll();

                                                    foreach ($data as $opcion):
                                                        echo '<option value="'.$opcion["id"].'">'.$opcion["nombre"].'</option>';
                                                    endforeach;
                                            ?>
                                                </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tipo de documento *</label>
                                        <select name="tipoDocumento" id="" class="form-control" value="" Required>
                                                                <option selected value="">
                                                                    --Selecciona--
                                                                </option>
                                                    <?php
                                                    $query=$connection->prepare("SELECT * FROM tbltipodocumentacion");
                                                    $query->execute();
                                                    $data=$query->fetchAll();

                                                    foreach ($data as $opcion):
                                                        echo '<option value="'.$opcion["id"].'">'.$opcion["nombre"].'</option>';
                                                    endforeach;
                                            ?>
                                                </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label>Usuario *</label>
                                    <div class="input-group mb-2">
                                            <select class="form-control" name="usuario" value="<?php echo $edit? $actividad["usuario"]: ""?>">
                                             <option selected value="">
                                                     --Selecciona--
                                             </option>
                                             <?php
                                                $query=$connection->prepare("SELECT * FROM tblusuario");
                                                $query->execute();
                                                $data=$query->fetchAll();

                                                foreach ($data as $opcion):
                                                 echo '<option value="'.$opcion["docIdentidad"].'">'.$opcion["nombres"]." ".$opcion["apellidos"].'</option>';
                                                endforeach;
                                                ?>
                                            </select>  
                                    </div> 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Archivo *</label>
                                        <input type="file" name="archivoAsistencia" class="form-control input-default "  accept="util/pdf.php" Required>
                                    </div>
                                    <div class="col-12">
                                    <p>Los campos con * son requeridos</p>
                                        </div>
                            <div>
                            <input type="hidden" name="id" value="<?php echo  $edit? $actividad["id"]: ""?>"> 
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="Documentacion.php"> Cancelar</a></button>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!--**********************************
            Content body end
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

            <script src="./vendor/select2/js/select2.full.min.js"></script>
            <script src="./js/plugins-init/select2-init.js"></script>
 
</body>

</html>