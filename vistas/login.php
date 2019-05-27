<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="libs/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/boostrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="JS/jquery-3.3.1.min.js">
    <link rel="stylesheet" href="icons/fonts/style.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    
    <div class="modal-dialog text-center">
        <div class="tittle">
            <h1>WorLic ASA</h1>
            
        </div>

        <div class="col-sm-8 main-section">
            
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img\user.png" alt="">
                </div>
                <form action="" method="POST" class="col-12">
                    
                    <span class="icon-user">Usuario</span>
                    <div class="form-group" id="user-group">
                        <input type="text text-center" name="username" class="form-control" placeholder="Escribe tu usuario"  required />
                    </div>                    
                    <span class="icon-lock-closed">Contraseña</span>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" name="password" class="form-control" placeholder="Escribe tu contraseña"  required  />
                    </div>
                    <button type="submit" class="btn btn-primary "><span class="icon-tick"></span> Ingresar</button>
                </form>
                <?php
                    if (isset($errorLogin)) {
                        echo $errorLogin;
                    }
                    ?>
            </div>
        </div>
    </div>
</body>

</html>