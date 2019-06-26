
<?php
include '../includes/db.php';

$db = new DB();

$nombre = $_POST['nombre'];
$inversion = $_POST['inversion'];
$comportamiento = $_POST['comportamiento'];
$descripcion = $_POST['descripcion'];
$ubicacion  = $_POST['ubicacion'];
$inicio = $_POST['inicio'];
$fecha_esperada = $_POST['fecha_esperada'];
$terminada = $_POST['terminada'];
$duracion = $_POST['duracion'];
$contratista = $_POST['contratista'];
$caracteristicas = $_POST['caracteristicas'];

$sql =  "INSERT INTO obra(inversion_definida,comportamiento,
descripcion_obra,caracteristicas,ubicacion,fecha_inicio,fecha_final_esperada,fecha_final,
duracion,fk_obra,fk_contratista,fk_tipo_obra,nombre
            ) VALUES ('$inversion','$comportamiento','$descripcion','$caracteristicas',
            '$ubicacion','$inicio','$fecha_esperada','$terminada','$duracion','1','$contratista','1','$nombre')";




$conexion = $db->connect();
try {

    $conexion->query($sql);
    echo '
    <script>
    alert("Obra Registrada Correctamente Correctamente")
    window.history.go(-1);
    </script>
    ';
} catch (Exception $e) {
    echo "Error: {$e->getMessage()} ";
}
