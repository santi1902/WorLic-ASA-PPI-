
<?php
include '../includes/db.php';

$db = new DB();
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$representante = $_POST['representante'];
$valor = $_POST['valor'];
$obra = $_POST['obra'];
$contratista = $_POST['contratista'];

$sql =  "INSERT INTO contrato(nombre_contrato,fecha_contrato,representante_legal,
            valor_contrato,fk_obra,fk_contratista) VALUES ('$nombre','$fecha',
            '$representante','$valor','$obra',
            '$contratista')";




$conexion = $db->connect();



try {
    $conexion->query($sql);
    echo '
    <script>
    alert("El contrato se a registrado correctamente")
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Error: {$e->getMessage()} ";
}
