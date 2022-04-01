<?php
include("util/conexion.php");
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: page-login.php');
    exit;
}

    $stmt=$connection->query("SELECT * FROM tblintegrantescomite;");
    $integrante = $stmt->fetchAll(PDO::FETCH_OBJ);


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
                            <h4>COMITES</h4>
                        </div>
                    </div>
                </div>
                <!-- row -->
                
            
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Afiliado</h4>
                            <button type="button" class="btn btn-rounded btn-info add-reunion ml-auto"
                            onclick="location.href='crearComite.html'"><span
                                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Crear Comite</button>
                    </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Acciones</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">JAC</th>
                                            <th scope="col">Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>  <!-- Large modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar I</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar C</button>
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
                                                                                             echo '<option value="'.$opcion["docIdentidad"].'">'.$opcion["nombres"].'</option>';
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
                                                                                                <input type="hidden" name="oculto" value="1">
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
                                                            <div class="modal-body"><!-- row -->
                                                                <div class="col-lg-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            
                                                                        </div> <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                                                        <div class="card-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-hover table-responsive-sm">
                                                                                    <thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th>Acciones</th>
                                                                                            <th>Nombres</th>
                                                                                            <th>Comite</th>
                                                                                            <th>Período</th>
                                                                                            <th>Estado</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php
                                                                                        $sel= $connection->prepare("SELECT * FROM vtaintegrantescomite   ");
                                                                                        $sel->setFetchMode(PDO::FETCH_ASSOC);
                                                                                        $sel->execute();
                                                                                        while($integrante = $sel->fetch()){
                                                                                            ?>
                                                                                            <tr>
                                                                                                 <td><a type="button" class="btn btn-primary"
                                                         href="editarIntegranteComite.php?id=<?php echo"{$integrante["id"]}"?>
                                                         "><i class="far fa-edit"></i> </a><br><br>
                                                         <a type="button" class="btn btn-primary" href="controllers/eliminaIntegranteComite.php?id=<?php echo "{$integrante["id"]}" ?>"><i class="fa fa-trash-o"></i></a>>
                                                                                                 </td>
                                                                                                 <td><?php echo "{$integrante["nombres"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["nombre"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["fechaInicio"]}";?></td>
                                                                                                 <td><?php echo "{$integrante["estado"]}";?></td>
                                                                                            </tr><?php
                                                                                        }
                                                                                        ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></td>
                                            <td>3456789</td>
                                            <td>Los Llanos</td>
                                            <td>Desarrollo</td>
                                        </tr>
                                        <tr>
                                            <td><!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar I</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar C</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Editar Comite</h4>
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
                                                                                    <div class="col-auto">
                                                                                        <div class="form-check mb-2">
                                                                                            <input class="form-check-input" type="checkbox">
                                                                                            <label class="form-check-label">
                                                                                                Estado
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                                                                                        <button type="submit" class="btn btn-primary mb-2">Cancelar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button></td>
                                            <td>3456789</td>
                                            <td>Los Balcones</td>
                                            <td>Convivencia</td>
                                        </tr>
                                        <tr>
                                            <td><!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar I</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar C</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button></td>
                                            <td>3456789</td>
                                            <td>Los Ochenta</td>
                                            <td>Desarrollo</td>
                                        </tr>
                                        <tr>
                                            <td><!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar I</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar C</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button></td>
                                            <td>3456789</td>
                                            <td>Sector el Alto</td>
                                            <td>Desarrollo</td>
                                        </tr>
                                        <tr>
                                            <td><!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar I</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar C</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></button></td>
                                            <td>3456789</td>
                                            <td>Los Llanos</td>
                                            <td>Convivencia</td>
                                        </tr>
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
        <footer class=" bg-dark text-white py-3">
            <div class="container">
                <nav class="row">
                
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold text-uppercase" >Contáctenos</li>
                            <li ><a href="#" class="text-reset"> <i class="fab fa-instagram" ></i> Nombre de Usaurio</a></li>
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