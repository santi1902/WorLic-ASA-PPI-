
<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include './includes/conexion2.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/nuevo.css">
    <link rel="stylesheet" href="icons/fonts/style.css">
    <link rel="stylesheet" href="libs/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/boostrap/js/bootstrap.min.js">
</head>

<body>
    <div class="container-fluid redes">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span class="icon-th-menu show"></span>
            <br>
            <h4> <?php echo $user->getNombre(); ?></h4>

            <a class="navbar-brand" href="#"></a>

            <div class="collapse navbar-collapse" class="navbarSupportedContent">
                <ul class="navbar-nav mr-auto redes">
                    <li>
                        <span class="icon-social-facebook">Facebook</span>
                        <span class="icon-social-twitter">Twitter</span>
                        <span class="icon-social-dribbble">Dribbble</span>
                    </li>
                </ul>


                <button type="buton" class="btn btn-dark"><a href="includes/logout.php" style="color:white">Cerrar session</a></button>

            </div>
        </nav>
    </div>
    <main class="main">
        <div class="content-menu">
            <a href="./">
                <li><span class="icon-archive"></span>
                    <h4 class="text1">Obras</h4>
                </li>
            </a>
            <li>
                <a href="vistas/contratos.php">
                    <span class="icon-ticket"></span>
                    <h4 class="text2">Contratos</h4>
                </a>
            </li>
            <li>
                <a href="vistas/contratistas.php">
                    <span class="icon-user"></span>
                    <h4 class="text3">Contratistas</h4>
                </a>
            </li>
            <li>
                <a href="vistas/administracion.php">
                    <span class="icon-weather-partly-sunny"></span>
                    <h4 class="text4">Administración</h4>
                </a>
            </li>
            <li>
                <a href="vistas/multas.php">
                    <span class="icon-flow-switch"></span>
                    <h4 class="text5">Multas</h4>
                </a>
            </li>
            <li><a href="vistas/reportes.php">
                    <span class="icon-device-laptop"></span>
                    <h4 class="text6">Reportes</h4>
                </a>
            </li>
            <li><a href="">
                    <span class="icon-device-laptop"></span>
                    <h4 class="text6">Log de Auditoria</h4>
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

                                    <h2 class="card-title text-center"> <strong>Obras</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <br>
                                        <div class="row">
                                            <a href="vistas/new_obra.php">
                                                <input type="button" class="btn btn-info" value="Nueva Obra">
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Inversion</th>
                                                <th>Ubicación</th>
                                                <th>Fecha de inicio</th>
                                                <th>Fecha final esperada</th>
                                                <th>Fecha final</th>
                                            </tr>
                                            <?php

                                            $obra = mysqli_query($conexion, "SELECT nombre, inversion_definida,ubicacion,fecha_inicio,fecha_final_esperada,fecha_final FROM obra");
                                            $result = mysqli_num_rows($obra);

                                            if($result > 0){
                                            while ($data = mysqli_fetch_array($obra)) {                                           
                                            ?>
                                            <tr>
                                                <td><?php echo $data['nombre'] ?></td>
                                                <td><?php echo $data['inversion_definida']?></td>
                                                <td><?php echo $data['ubicacion']?></td>
                                                <td><?php echo $data['fecha_inicio']?></td>
                                                <td><?php echo $data['fecha_final_esperada']?></td>
                                                <td><?php echo $data['fecha_final']?></td>
                                                <td><a href="./vistas/info.php"><button class="btn btn-info">Ver</button></a></td>
                                            </tr>
                                            <?php          
                                        }
                                    }
                                    ?>
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

    <script src="JS/jquery-3.3.1.min.js"></script>
    <script src="JS/menu.js"></script>
</body>

</html>