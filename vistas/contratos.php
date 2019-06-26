<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include '../includes/conexion2.php';
?>
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
            <li>
                <span class="icon-ticket"></span>
                <h4 class="text2">contratos</h4>
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

                                    <h2 class="card-title text-center"> <strong>Contratos</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <br>
                                        <div class="row">
                                            <a href="new_contrato.php">
                                                <input type="button" class="btn btn-info" value="Nuevo Contrato">
                                            </a>
                                        </div>
                                        <br>
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Codigo</th>
                                                <th>Representante Legal</th>
                                                <th>Obra</th>
                                            </tr>
                                            
                                            <?php

                                            $contrato = mysqli_query($conexion, "SELECT nombre_contrato, fecha_contrato,representante_legal,valor_contrato FROM contrato");
                                            $result = mysqli_num_rows($contrato);

                                            if($result > 0){
                                            while ($data = mysqli_fetch_array($contrato)) {                                           
                                            ?>
                                            <tr>
                                                <td><?php echo $data['nombre_contrato'] ?></td>
                                                <td><?php echo $data['fecha_contrato']?></td>
                                                <td><?php echo $data['representante_legal']?></td>
                                                <td><?php echo $data['valor_contrato']?></td>
                                                <td><a href="./infocontratos.php"><button class="btn btn-info">Ver</button></a></td>
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
    <script src="../JS/jquery-3.3.1.min.js"></script>
    <script src="../JS/menu.js"></script>
</body>

</html>