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
    <link rel="st
    ylesheet" href="../libs/boostrap/js/bootstrap.min.js">
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

            <li>
                <a href="../">
                    <span class="icon-archive"></span>
                    <h4 class="text1">Obras</h4>
                </a>
            </li>

            <li>
                <a href="../vistas/contratos.php">
                    <span class="icon-ticket"></span>
                    <h4 class="text2">Contratos</h4>
                </a>
            </li>
            <li>
                <a href="../vistas/contratistas.php">
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
                <span class="icon-flow-switch"></span>
                <h4 class="text5">Multas</h4>
            </li>
            <li>
            <a href="../vistas/administracion.php">    
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
                                    
                                <h2 class="card-title text-center"> <strong>Multas</strong></h2>
                                </div>
                                <div class="card-body">
                                <table class="table table-hover">
             <tr>
                 <th>Nombre</th>
                 <th>Codigo</th>
                 <th>Contratista</th>
                 <th>Tiempo</th>
                 <th>Info</th>
             </tr>
             <tr>
                 <td>Arconsa</td>
                 <td>38483-CDS</td>
                 <td>Argelio Ramirez</td>
                 <td>2 meses</td>
                 <td><button class="btn btn-info">Ver</button></td>

             </tr>
             <tr>
                 <td>Prebel</td>
                 <td>VD-3454-DE</td>
                 <td>Santiago</td>
                 <td>3 meses</td>                 
                 <td><button class="btn btn-info">Ver</button></td>
             </tr>
             </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/menu.js"></script>
</body>

</html>