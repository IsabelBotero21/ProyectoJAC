<?php
//Conexxion base de datos.
include("util/conexion.php");
session_start();
 //Usuario de logueo.
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}
//Get se utilza con el id para actualizar. 
if(!isset($_GET['id'])){
    exit();
 }
    $id=$_GET['id'];
    //Consulta a la tabla integrantescomite para actualizar los registros.
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
                                            <li><a href="jac.php" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Jac</span></a></li>
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
                                                                    <!-- inicio formulario-->
                                                                    <div class="basic-form">
                                                                        <form action="controllers/editarIntegranteComite.php" method="post">
                                                                            <div class="form-row align-items-center">
                                                                                <div class="col-6">
                                                                                <label>Usuario</label>
                                                                                <div>
                                                                                        <div class="input-group-prepend">
                                                                                        <select class="form-control" name="usuario">
                                                                                         <!-- Consulta para traer las listas desplegables o select dinamico. -->
                                                                                         <?php
                                                                                            $query=$connection->prepare("SELECT * FROM tblusuario");
                                                                                            $query->execute();
                                                                                            $data=$query->fetchAll();

                                                                                            foreach ($data as $opcion):
                                                                                             echo '<option '.(($integrante->docIdentidad == $opcion["docIdentidad"]) ? 'selected' : '').' value="'.$opcion["docIdentidad"].'">'.$opcion["nombres"]." ".$opcion["apellidos"].'</option>';
                                                                                            endforeach;
                                                                                            ?>
                                                                                         </select>  
                                                                                         </div>
                                                                                         </div>          
                                                                                     </div>
                                                                                <div class="col-6">
                                                                                <label>comité</label>
                                                                                <div >
                                                                                        <div >
                                                                                        <select class="form-control" name="comite" value="<?php echo $edit? $actividad["comite"]: ""?>">
                                                                                            <!-- Consulta para traer las listas desplegables o select dinamico. -->
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
                                                                                <div class="col-6"><br>
                                                                                <label>Período</label>
              
                                                                                    <div>
                                                                                        <div >
                                                                                           <select class="form-control" name="periodo" value="<?php echo $edit? $actividad["periodo"]: ""?>">
                                                                                               <!-- Consulta para traer las listas desplegables o select dinamico. -->
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
                                                                                    <div  style="margin-left: 50px;" ><br><br>
                                                                                    <input class="form-check-input" name="estado" type="checkbox" <?php if ($integrante->estado == 1) {echo 'checked="checked"';} ?>>
                                                                                        <label class="form-check-label">
                                                                                            Estado
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto"><br><br>
                                                                                    <button type="submit" class="btn btn-primary mb-2" style="margin-left: 270px;">Actualizar</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- fin formulario-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <!--**********************************
            Content body end
        ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
 </div>
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