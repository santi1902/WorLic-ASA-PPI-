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

                <button type="buton" class="btn btn-dark"><a href="../includes/logout.php" style="color:white">Cerrar session</a></button>
            </div>
        </nav>
    </div>
    <main class="main">
        <div class="content-menu">
            <a href="../">
                <li><span class="icon-archive"></span>
                    <h4 class="text1">Obras</h4>
                </li>
            </a>
            <li>
                <a href="./contratos.php">
                    <span class="icon-ticket"></span>
                    <h4 class="text2">Contratos</h4>
                </a>
            </li>
            <li>
                <a href="./contratistas.php">
                    <span class="icon-tags"></span>
                    <h4 class="text3">Contratistas</h4>
                </a>
            </li>
            <li>
                <a href="administracion.php">
                    <span class="icon-weather-partly-sunny"></span>
                    <h4 class="text4">Administración</h4>
                </a>
            </li>
            <li><span class="icon-flow-switch"></span>
                <h4 class="text5">Multas</h4>
            </li>
            <li><span class="icon-device-laptop"></span>
                <h4 class="text6">Reportes</h4>
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

                                    <h2 class="card-title text-center"> <strong>Parametrizacion de Multas</strong></h2>
                                </div>

                                <div class="card-body">
                                <form action="">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Valor del porcentaje del dia</label>
                                        <input type="number" class="form-control" id="codigo" placeholder="Ingresa porcentaje del dia " required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Valor porcentaje acumulado</label>
                                        <input type="number" class="form-control" id="codigo" placeholder="Ingresa porcentaje acumulado" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Incremento por valor acumalado</label>
                                        <input type="number" class="form-control" id="codigo" placeholder="Ingresa valor acumalado" required>
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary col/col-md-6">Guardar</button>
                                
                                </div>
                            </form>
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