<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reuniones</title>
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Custom style reuniones -->
    <link rel="stylesheet" href="./css/reuniones.css">
    <!-- Custom style reuniones -->
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
                    <li><a href="index.html" aria-expanded="false"><i class="fas fa-home"></i><span
                                class="nav-text">Home</span></a></li>
                    <li><a href="usuarios.html" aria-expanded="false"><i class="fas fa-users"></i><span
                                class="nav-text">Usuarios</span></a></li>
                    <li><a href="reuniones.html" aria-expanded="false"><i class="far fa-handshake"></i><span
                                class="nav-text">Reuniones</span></a></li>
                    <li><a href="actas.html" aria-expanded="false"><i class="fas fa-folder"></i><span
                                class="nav-text">Actas</span></a></li>
                    <li><a href="Documentacion.html" aria-expanded="false"><i class="fas fa-book"></i><span
                                class="nav-text">Documentacion</span></a></li>
                    <li><a href="comites.html" aria-expanded="false"><i class="fas fa-user-friends"></i><span
                                class="nav-text">Comites</span></a></li>
            </div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>REUNIONES</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-rounded btn-info add-reunion ml-auto"
                                onclick="location.href='reuniones-formulario.html'"><span
                                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                </span>Crear reunión</button>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#todas">Todas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#abiertas">Abiertas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#cerradas">Cerradas</a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade show active" id="todas" role="tabpanel">
                                        <div class="table-responsive">
                                            <table id="" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Acciones</th>
                                                        <th>Descripcion</th>
                                                        <th>Encargado</th>
                                                        <th>Comite Encargado</th>
                                                        <th>Fecha</th>
                                                        <th>Hora Inicio</th>
                                                        <th>Hora Final</th>
                                                        <th>Lugar</th>
                                                        <th>Seguimiento</th>
                                                        <th>Acta</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="far fa-edit"></i></td>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juan Alberto</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td></td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td></td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="abiertas">
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
                                                        <th>Lugar</th>
                                                        <th>Seguimiento</th>
                                                        <th>Acta</th>
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
                                                        <td>Caseta</td>
                                                        <td></td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Recoleccion de firmas para ajusted del sat</td>
                                                        <td>Juana Lucia</td>
                                                        <td>desarrollo</td>
                                                        <td>23/07/2022</td>
                                                        <td>11:00 am</td>
                                                        <td>12:00 pm</td>
                                                        <td>Caseta</td>
                                                        <td>Hola</td>
                                                        <td>...</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cerradas">
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
                                                        <th>Lugar</th>
                                                        <th>Seguimiento</th>
                                                        <th>Acta</th>
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
                                                        <td>Caseta</td>
                                                        <td></td>
                                                        <td>...</td>
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
</body>

</html>