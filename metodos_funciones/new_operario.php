
<?php
include '../includes/db.php';

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



$verificar_usuario  = "SELECT * FROM usuario WHERE username = '$email'";

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
