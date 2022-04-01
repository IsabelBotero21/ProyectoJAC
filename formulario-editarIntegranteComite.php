<?php
include("util/conexion.php");
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
if(!isset($_GET['id'])){
    exit();
 }
    $id=$_GET['id'];
    $sentencia=$connection->prepare("SELECT * FROM tblintegrantescomite WHERE id=?;");
    $sentencia->execute([$id]);
    $integrante = $sentencia->fetch(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Comites</title>
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
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Editar Integrante Comité</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->
                
            
                <div class="col-lg-12">
                    
                                    <tbody>
                                        <tr>
                                            <td>  <!-- Large modal -->
                                                <div >
                                                    <div>
                                                        <div>
                                                            
                                                            <div class="card">
                                            
                                                                <div class="card-body">
                                                                    
                                                                    <div class="basic-form">
                                                                        <form action="controllers/editarIntegranteComite.php" method="post">
                                                                            <div class="form-row align-items-center">
                                                                                <div class="col-6">
                                                                                <label>Usuario</label>
                                                                                <div>
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
                                                                                             echo '<option '.(($integrante->docIdentidad == $opcion["docIdentidad"]) ? 'selected' : '').' value="'.$opcion["docIdentidad"].'">'.$opcion["nombres"].'</option>';
                                                                                            endforeach;
                                                                                            ?>
                                                                                         </select>  
                                                                                         </div>
                                                                                         </div>          
                                                                                     </div>
                                                                                <div class="col-6">
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
                                                                                                echo '<option '.(($integrante->idComite == $opcion["id"]) ? 'selected' : '').' value="'.$opcion["id"].'">'.$opcion["nombre"].'</option>';
                                                                                               endforeach;
                                                                                            ?>
                                                                                         </select> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                <label>Período</label>
              
                                                                                    <div class="input-group mb-4">
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
                                                                                                  
                                                                                                   echo '<option '.(($integrante->periodo == $opcion["id"]) ? 'selected' : '').' value="'.$opcion["id"].'">'.$opcion["fechaInicio"]." / ".$opcion["fechaFinal"].'</option>';
                                                                                                  endforeach;
                                                                                                ?>
                                                                                           </select> 
                                                                                        </div>
                                                                                            <div>
                                                                                                <input type="hidden" name="oculto" >
                                                                                                <input type="hidden" name="id" value="<?php echo $integrante->id;?>">
                                                                                            </div>                                                                                  
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <div class="form-check mb-2">
                                                                                    <input class="form-check-input" name="estado" type="hidden" value="0">
                                                                                        <input class="form-check-input" name="estado" type="checkbox" value="si">
                                                                                        <label class="form-check-label">
                                                                                            Estado
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <button type="submit" class="btn btn-primary mb-2" style="margin-left: 400px;">Agregar</button>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                           
                                        
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
            Footer start
        ***********************************-->
      
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