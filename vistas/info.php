<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información</title>
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../icons/fonts/style.css">
    <link rel="stylesheet" href="../libs/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/boostrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span class="icon-th-menu show"></span>

            <a class="navbar-brand" href="#"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
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
            </a>
            <li>
                <a href="./contratos.php">
                    <span class="icon-ticket"></span>
                    <h4 class="text2">contratos</h4>
                </a>
            </li>
            <li>

                <a href="./contratistas.php">
                    <span class="icon-user"></span>
                    <h4 class="text3">Contratistas</h4>
                </a>
            </li>
            <li>
                <a href="../vistas/administracion.php">
                    <span class="icon-weather-partly-sunny"></span>
                    <h4 class="text4">Administración</h4>
                </a>
            </li>
            <li>
                <a href=" ../vistas/administracion.php">
                    <span class="icon-flow-switch"></span>
                    <h4 class="text5">Multas</h4>
                </a>
            </li>

            <li>
                <a href="../vistas/reportes.php">
                    <span class="icon-device-laptop"></span>
                    <h4 class="text6">Reportes</h4>
                </a>
            </li>
        </div>
        <div class="container">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-header-danger">
                                <div class="card-header card-header-danger ">

                                    <h2 class="card-title text-center"> <strong>Información Completa</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <br>


                                        <h4 class="text-center">Arconsa Deploide</h4>
                                        <div class="row col-md-3">
                                            <img src="../img\obra.png" alt="" width="200px" height="200px">
                                        </div>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input type="text" readonly="true" value="Arconsa Deploide" class="form-control" id="Nombre"  required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Inversion Definida</label>
                                                    <input type="text" readonly="true" value="$2'300.000" class="form-control" id="inversion" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Comportamiento</label>
                                                    <input type="text" readonly="true" value="Sucursal" class="form-control" id="comportamiento"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Descripción </label>
                                                    <input type="text" readonly="true" value="Se lleva a cabo el proceso de gestion de area" class="form-control" id="Descipcion"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha inicio </label>
                                                    <input type="text" readonly="true" value="27-04-2019" class="form-control" id="inicio" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha final esperada </label>
                                                    <input type="text" readonly="true" value="27-10-2019" class="form-control" id="terminado"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha Terminado </label>
                                                    <input type="text" readonly="true" value="27-10-2019" class="form-control" id="terminado"  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Duración </label>
                                                    <input type="text" readonly="true" value="4 meses" class="form-control" id="Descipcion"  required>
                                                </div>


                                            </div>

                                        </form>

                                        <br>

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