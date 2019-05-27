<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contratos</title>
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
            <li><a href="../vistas/contratos.php">
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
                    <span class="icon-device-laptop"></span>
                    <h4 class="text6">Reportes</h4>
                
            </li>
        </div>
        <div class="container">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-header-danger">
                                <div class="card-header card-header-danger ">

                                    <h2 class="card-title text-center"> <strong>Reportes</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <br>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Seleccione el tipo de reporte</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>seleccione una opción</option>
                                                    <option>Obras</option>
                                                    <option>Contratos</option>
                                                    <option>Contratistas</option>
                                                    <option>Administración</option>
                                                    <option>Multas</option>
                                                </select>
                                            </div>

                                            <div class="card-body">
                                                <div class="container">

                                                    <br>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Fecha inicio</label>
                                                                <input type="date" class="form-control" id="Nombre" placeholder="Ingresa primer nombre " required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Fecha final</label>
                                                                <input type="date" class="form-control" id="Nombre" placeholder="Ingresa primer nombre " required>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                                    </form>
                                                    <br>
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Codigo</th>
                                                            <th>Representante Legal</th>
                                                            <th>Obra</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Arconsa</td>
                                                            <td>38483-CDS</td>
                                                            <td>Argelio Ramirez</td>
                                                            <td>Politecnico Jaime isaza</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Prebel</td>
                                                            <td>VD-3454-DE</td>
                                                            <td>Santiago valencia</td>
                                                            <td>Arus S.A</td>
                                                        </tr>
                                                    </table>

                                                    <td><button class="btn btn-info">Exportar a Excel</button></td>
                                                </div>
                                            </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>