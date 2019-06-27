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
                <a href="../">
                    <input class="btn btn-info" type="button" value="Atras" style="left">
                </a>
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
                <a href="./contratistas.php">
                    <span class="icon-tags"></span>
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
                <a href="..">
                    <span class="icon-flow-switch"></span>
                    <h4 class="text5">Multas</h4>
                </a>
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

                                    <h2 class="card-title text-center"> <strong>Contratos</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        
                                        <br>
                                        <form method="post" action="../metodos_funciones/new_contrato.php">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha</label>
                                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha del contrato" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Representante Legal</label>
                                                    <input type="text" class="form-control" name="representante" placeholder="Representante legal" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Valor del contrato</label>
                                                    <input type="number" class="form-control" name="valor" placeholder="Representante legal" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState">Obra</label>
                                                    <select name="obra" class="form-control">
                                                        <?php 
                                                        include '../includes/conexion2.php';

                                                        $obra = "SELECT * from obra";
                                                        $resultado = mysqli_query($conexion,$obra) or die(mysqli_error($conexion));
                                                        ?>

                                                        <?php foreach ($resultado as $opciones):?>                                                 
                                                           
                                                        
                                                        <option value="<?php echo $opciones['id_obra'] ?>"><?php echo $opciones['nombre'] ?></option>

                                                        <?php endforeach ;
                                                       $close = mysqli_close($conexion);
                                                        ?>

                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState">Contratistas</label>
                                                    <select name="contratista" class="form-control">
                                                        <?php 
                                                        include '../includes/conexion2.php';

                                                        $contratista = "SELECT * from contratista";
                                                        $resultado = mysqli_query($conexion,$contratista) or die(mysqli_error($conexion));
                                                        ?>

                                                        <?php foreach ($resultado as $opciones):?>                                                 
                                                           
                                                        
                                                        <option value="<?php echo $opciones['id_contratista'] ?>"><?php echo $opciones['primer_nombre'] ?></option>

                                                        <?php endforeach ;
                                                       $close = mysqli_close($conexion);
                                                        ?>

                                                    </select>
                                                </div>
                                                

                                            </div>                                      

                                            <button type="submit" class="btn btn-primary">Crear</button>
                                        </form>
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