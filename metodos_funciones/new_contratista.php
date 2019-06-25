
<?php
include '../includes/db.php';

$db = new DB();
$nombre = $_POST['nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$apellido = $_POST['apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$sql =  "INSERT INTO contratista(id_contratista,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,
        identificacion,telefono,email,fk_tipo_documento)
         VALUES ('NULL','$nombre','$segundo_nombre','$apellido','$segundo_apellido','$cedula','$celular','$email','1')";




$conexion = $db->connect();



try {
    $conexion->query($sql);
    echo '
    <script>
    alert("El contratista se registro Correctamente")
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Error: {$e->getMessage()} ";
}
