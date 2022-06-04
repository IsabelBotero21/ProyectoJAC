<?php
include("util/conexion.php");
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}

    $stmt=$connection->query("SELECT * FROM tblcomite");
    $comite = $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt=$connection->query("SELECT * FROM tblintegrantescomite;");
    $integrante = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Comites</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/escudo.jpg">
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
                            <i class="mdi mdi-account"> 
                                        <?php echo ($_SESSION['user_id'] ) ?>
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
                                <li><a  href="Documentacion.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                    class="nav-text">Documentacion</span></a></li>
                                    <li><a href="comites.php" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                                        class="nav-text">Comites</span></a></li><?php if ($_SESSION['perfil']== 1):?>
                                        <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Jac</span></a></li><?php endif ?>
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
                        <h4>COMITES</h4>
                    </div>
                </div>
            </div>
        <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4><?php if ($_SESSION['perfil']== 2):?>
                        <button type="button" class="btn btn-rounded btn-info add-reunion ml-auto"
                        onclick="location.href='crearComite.php'"><span
                            class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Crear Comite</button> <?php endif ?>                       
                    </div>
                </div>
                
                
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-sm">
                                <thead>
                                    <tr>
                                            <th scope="col"><?php if ($_SESSION['perfil']== 2):?>Acciones<?php endif ?>  </th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">JAC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>  <!-- Large modal -->
                                                    <?php
                                                        $sel = $connection->prepare("SELECT * FROM tblcomite");
                                                        $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                        $sel->execute();
                                                        while ($comite = $sel->fetch())
                                                        {
                                                    ?>
                                                     <tr>
                                                    <td><?php if ($_SESSION['perfil']== 2):?>
                                                      <a  class="btn btn-primary" href="controllers/eliminarcomite.php?id=<?php  echo "{$comite["id"]}" ?>"><i class=" fas fa-trash" ></i></a>
                                                      <a  class="btn btn-primary" href="Actualizarcomite.php?id=<?php  echo "{$comite["id"]}" ?>"><i class="far fa-edit" ></i></a>
                                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user-plus"></i></button>
                                                      </td> <?php endif ?>  
                                                        <td><?php echo "{$comite["nombre"]}" ?></td>
                                                        <td><?php echo "{$comite["jac"]} " ?></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
            Modal Start
        ***********************************-->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Agregar Integrantes Comité</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div><br>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="basic-form">
                                                                        <form action="controllers/insertarIntegranteComite.php" method="post">
                                                                        <div class="form-row align-items-center">
                                                                            <div class="col-auto">
                                                                                <label>Usuario</label>
                                                                                <div class="input-group mb-2">
                                                                                    <div class="input-group-prepend">
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
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label>comité</label>
                                                                                <div class="input-group mb-2">
                                                                                    <div class="input-group-prepend">
                                                                                        <select class="form-control" name="comite" value="<?php echo $edit? $actividad["comite"]: ""?>">
                                                                                            <option selected value="">
                                                                                                --Selecciona--
                                                                                            </option>
                                                                                            <?php
                                                                                               $query=$connection->prepare("SELECT * FROM tblcomite");
                                                                                               $query->execute();
                                                                                               $data=$query->fetchAll();

                                                                                               foreach ($data as $opcion):
                                                                                                echo '<option value="'.$opcion["id"].'">'.$opcion["nombre"].'</option>';
                                                                                               endforeach;
                                                                                            ?>
                                                                                        </select> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label>Período</label>
                                                                                <div class="input-group mb-2">
                                                                                    <div class="input-group-prepend">
                                                                                        <select class="form-control" name="periodo" value="<?php echo $edit? $actividad["periodo"]: ""?>">
                                                                                            <option selected value="">
                                                                                                --Selecciona--
                                                                                            </option>
                                                                                            <?php
                                                                                                $query=$connection->prepare("SELECT * FROM tblperiodo");
                                                                                                $query->execute();
                                                                                                $data=$query->fetchAll();

                                                                                                foreach ($data as $opcion):
                                                                                                echo '<option value="'.$opcion["id"].'">'.$opcion["fechaInicio"]." / ".$opcion["fechaFinal"].'</option>';
                                                                                                endforeach;
                                                                                            ?>
                                                                                        </select> 
                                                                                    </div>
                                                                                    <div>
                                                                                        <input type="hidden" name="oculto1" value="1">
                                                                                    </div>                                                                                  
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <div class="form-check mb-2"><br>
                                                                                    <input class="form-check-input" name="estado" type="checkbox" value="No">
                                                                                    <input class="form-check-input" name="estado" type="checkbox" value="Si">
                                                                                    <label class="form-check-label">
                                                                                        Estado
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto"><br>
                                                                                <button type="submit" class="btn btn-primary mb-2" style="margin-left: 20px;">Agregar</button>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- row -->
                                                                    <div class="col-lg-12">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                            
                                                                            </div>
                                                                            <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                                                                <div class="card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-hover table-responsive-sm">
                                                                                            <thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th>Acciones</th>
                                                                                                        <th>Nombres</th>
                                                                                                        <th>Comité</th>
                                                                                                        <th>Período</th>
                                                                                                        <th>Estado</th>
                                                                                                    </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <?php
                                                                                            $sel= $connection->prepare("SELECT * FROM vtaintegrantecomite  ");
                                                                                            $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                                                            $sel->execute();
                                                                                            while($integrante = $sel->fetch()){
                                                                                            ?>
                                                                                            <tr>
                                                                                                 <td>
                                                                                                     <a type="button" class="btn btn-primary"href="formulario-editarIntegranteComite.php?id=<?php echo"{$integrante["id"]}"?>"><i class="far fa-edit"></i> </a><br><br>
                                                                                                     <a type="button" class="btn btn-primary" href="controllers/eliminarIntegranteComite.php?id=<?php echo "{$integrante["id"]}" ?>"><i class="fa fa-trash-o"></i></a>
                                                                                                 </td>
                                                                                                 <td><?php echo "{$integrante["nombres"]} {$integrante["apellidos"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["nombre"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["fechaInicio"]} - {$integrante["fechaFinal"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["estado"]}";?></td>
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
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                <button type="button" class="btn btn-primary">Guardar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


        <!--**********************************
            Modal end
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