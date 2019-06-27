
<?php
include '../includes/db.php';
include '../includes/conexion2.php';

$db = new DB();
$nombre = $_POST['nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$apellido = $_POST['apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql =  "INSERT INTO usuario(nombre,segundo_nombre,primer_apellido,segundo_apellido,
            identificacion,direccion,telefono,username,password,perfil,fk_tipo_documento,fk_parametrizacion
            ) VALUES ('$nombre','$segundo_nombre','$apellido','$segundo_apellido','$cedula',
            '$direccion','$celular','$email','$password','1','1','1')";



$verificar_usuario  = mysqli_query($conexion,"SELECT * FROM usuario WHERE username = '$email' or identificacion = '$cedula'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("El usuario ya se encuentra registrado verifique la cedula o correo electronico")
    window.history.go(-1);
    </script>';
    exit; 
}


$conexion = $db->connect();
try {
    $conexion->query($sql);
    echo '
    <script>
    alert("El operario se Registro Correctamente")
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Error: {$e->getMessage()} ";
}
mysqli_close($conexion);
