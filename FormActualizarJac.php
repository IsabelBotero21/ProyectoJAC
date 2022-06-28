<?php 
//Usuario de logueo.
	session_start();
	if(!isset($_SESSION['user_id'])){
        header('Location: page-login.php');
        exit;
    }

	if (!isset($_SESSION['user_id'])) {
		header('Location: page-login.php');
	}elseif(isset($_SESSION['user_id'])){
        //Conexión base de datos.
		include ('util/conexion.php');
		$id = $_GET['id'];
        //Consulta a la tabla jac para actualizar los registros.
		$sel = $connection->prepare("SELECT * FROM tbljac WHERE id = ?;");
		$sel->execute([$id]);
		$fila = $sel->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crear Jac</title>
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
                    <li><a href="Documentacion.php" aria-expanded="false"><i class="fas fa-book"></i><span
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
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Crear Jac</h4>
                        </div>
                    </div>
                </div>
                 <!-- inicio formulario-->
                <form action="controllers/actualizarJac.php" method="post" id="" name="">
                    <div class="row card">
                        <div class="col-12 pt-3">
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nit *</label>
                                            <input type="number" name="nit2" class="form-control input-default " value="<?php echo $fila->nit; ?>" Required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" name="direccion2" class="form-control input-default " value="<?php echo $fila->direccion; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input type="text" name="nombre2" class="form-control input-default " value="<?php echo $fila->nombre; ?>" Required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" name="telefono2" class="form-control input-default " value="<?php echo $fila->telefono; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Municipio *</label>
                                            <select class="form-control" name="municipio2" value="<?php echo $edit? $fila["nombre"]: ""?>" Required>
                                                <option selected value="">
                                                    --Selecciona--
                                                </option>
                                                <!-- Consulta para traer las listas desplegables o select dinamico. En este caso la lista de todos los municipios. -->
                                                <?php
                                           $query=$connection->prepare("SELECT * FROM tblmunicipio");
                                           $query->execute();
                                           $data=$query->fetchAll();

                                           foreach ($data as $municipio):
                                            echo '<option '.(($fila->id == $municipio["id"]) ? 'selected' : '').' value="'.$municipio["id"].'">'.$municipio["nombre"].'</option>';
                                           endforeach;
                                           ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                <div class="col-12">
                                <div class="form-group">
                                            <label>Correo</label>
                                            <input type="text" name="gmail" class="form-control input-default " value="<?php echo $fila->email; ?>">
                                        </div>
                                    </div>        
                                <div >
                            </div>
                        </div>
                        <div class="col-12" >
                        <p>Los campos con * son requeridos</p>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-primary"><a href="jac.php">Cancelar</button>
                     <button type="submit" class="btn btn-primary" name="id2" value="<?php echo $fila->id; ?>">Guardar</button>
                </form>
            </div>
             <!-- fin formulario-->
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