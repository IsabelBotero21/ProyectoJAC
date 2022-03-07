<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <script src="https://kit.fontawesome.com/a0b0003306.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciar sesión </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Iniciar sesión</h4>
                                    <form method="POST" action="controllers/loginController.php">
                                        <div class="card-body">
                                            <div class="basic-form">
                                                    <div class="form-group">
                                                        <label class="text-label">Usuario</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="docIdentidad" name="docIdentidad" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-label">clave</label>
                                                        <div class="input-group transparent-append">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                            </div>
                                                            <input type="password" class="form-control" id="clave" name="clave" placeholder="">
                                                            <div class="input-group-append show-pass">
                                                                <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">¿Haz olvidado tu contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Iniciar sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>