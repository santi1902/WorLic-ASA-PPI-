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
                <a href="vistas/administracion.php">
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

                                    <h2 class="card-title text-center"> <strong>Nueva Obra</strong></h2>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <br>
                                        <form action="../metodos_funciones/new_obra.php" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre " required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Inversion Definida</label>
                                                    <input type="number" class="form-control" name="inversion" placeholder="Inversion Definida" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Comportamiento</label>
                                                    <input type="text" class="form-control" name="comportamiento" placeholder="Comportamiento" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Descripción </label>
                                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Caracteristicas </label>
                                                    <input type="text" class="form-control" name="caracteristicas" placeholder="Caracteristicas" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Ubicación </label>
                                                    <input type="text" class="form-control" name="ubicacion" placeholder="Ubicación" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha inicio </label>
                                                    <input type="date" class="form-control" name="inicio" placeholder="Fecha de inicio de la obra" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha final esperada </label>
                                                    <input type="date" class="form-control" name="fecha_esperada" placeholder="Fecha esperada de finalización" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Fecha Terminado </label>
                                                    <input type="date" class="form-control" name="terminada" placeholder="Fecha de terminación de la obra" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Duración de la obra </label>
                                                    <input type="number" class="form-control" name="duracion" placeholder="Escribe la duración" required>
                                                </div>
                                                <div class="form-group col-md-4">
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