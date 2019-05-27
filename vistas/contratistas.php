<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../icons/fonts/style.css">
    <link rel="stylesheet" href="../libs/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/boostrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container-fluid redes">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span class="icon-th-menu show"></span>

            <a class="navbar-brand" href="#"></a>

            <div class="collapse navbar-collapse" class="navbarSupportedContent">
                <ul class="navbar-nav mr-auto redes">
                    <li>
                        <span class="icon-social-facebook">Facebook</span>
                        <span class="icon-social-twitter">Twitter</span>
                        <span class="icon-social-dribbble">Dribbble</span>
                    </li>
                </ul>


                <button type="buton" class="btn btn-dark"><a href="../includes/logout.php" style="color:white">Cerrar sesion</a></button>

            </div>
        </nav>
    </div>
    <main class="main">
        <div class="content-menu">
            <li>
                <a href="../">
                    <span class="icon-archive"></span>
                    <h4 class="text1">Obras</h4>
                </a>
            </li>
            <li>
                <a href="./contratos.php">
                    <span class="icon-ticket"></span>
                    <h4 class="text2">Contratos</h4>
                </a>
            </li>
            <li>

                <span class="icon-user"></span>
                <h4 class="text3">Contratistas</h4>

            </li>
            <li>
                <a href="../vistas/administracion.php">
                    <span class="icon-weather-partly-sunny"></span>
                    <h4 class="text4">Administración</h4>
                </a>
            </li>
            <li><a href="../vistas/multas.php">
                <span class="icon-flow-switch"></span>
                <h4 class="text5">Multas</h4>
                </a>
            </li>
            <li><a href="../vistas/reportes.php">
                <span class="icon-device-laptop"></span>
                <h4 class="text6">Reportes</h4>
                </a>
            </li>
        </div>
        <br>
        <div class="container">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-header-danger">
                                <div class="card-header card-header-danger ">

                                    <h2 class="card-title text-center"> <strong>Contratitas</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <br>
                                        <div class="row">
                                            <a href="new_contratista.php">
                                                <input type="button" class="btn btn-info" value="Nuevo Contratista">
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Cedula</th>
                                                <th>Estado</th>
                                            </tr>
                                            <tr>
                                                <td>Santiago</td>
                                                <td>Valencia Guzmán</td>
                                                <td>1000395174</td>
                                                <td>Disponible</td>
                                            </tr>
                                            <tr>
                                                <td>Angie Carolina</td>
                                                <td>Orlas Madrid</td>
                                                <td>1007239625</td>
                                                <td>Ocupado</td>
                                            </tr>
                                            <tr>
                                                <td>Alejandra</td>
                                                <td>Montoya</td>
                                                <td>23942034</td>
                                                <td>Ocupado</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>


    </main>

    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/menu.js"></script>
</body>

</html>