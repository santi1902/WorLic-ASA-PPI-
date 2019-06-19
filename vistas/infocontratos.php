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
                                            <img src="../img\contrato.png" alt="">
                                        </div>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input type="text" readonly="true" value="Obras Metro" class="form-control" id="nombre" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Codigo</label>
                                                    <input type="text" readonly="true" value="C-903C-89" class="form-control" id="codigo" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Representante Legal</label>
                                                    <input type="text" readonly="true" value="Santiago Valencia Guzmán" class="form-control" id="representante" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState" aria-required="">Obra</label>
                                                    <input type="text" readonly="true" value="Politecnico Jaime isaza" class="form-control" id="representante" required>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState">Contratistas</label>
                                                    <input type="text" readonly="true" value="Angie Carolina Orlas" class="form-control" id="representante" required>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Valor del Contrato</label>
                                                    <input type="text" readonly="true" value="$23'323'999" class="form-control" id="valor"  required>
                                                </div>

                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">Fecha de Inicio</label>
                                                    <input type="text" readonly="true" value="2018-02-20" class="form-control" id="inputCity" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputZip">Fecha de Terminado</label>
                                                    <input type="text" readonly="true" value="2019-02-20" class="form-control" id="inputZip" required>
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