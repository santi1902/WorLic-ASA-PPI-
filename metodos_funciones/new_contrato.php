
<?php 
  
    include '../includes/db.php';

    $db = new DB();

        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $representante = $_POST['representante'];
        $valor = $_POST['valor'];
        $obra = $_POST['obra'];
        $contratista = $_POST['contratista'];

  

    class NuevoContrato {
        private $nombre;
        private $fecha;
        private $representante;
        private $valor;
        private $obra;
        private $contratista;

        function __construct($nombre, $fecha, $representante, $valor, $obra, $contratista, $conexion) {
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->representante = $representante;
            $this->valor = $valor;
            $this->obra = $obra;
            $this->contratista = $contratista;
            $this->conexion = $conexion;
        }


        function getNombre(){
            return $this->nombre;
        }
        function getFecha(){
            return $this->fecha;
        }
        function getRepresentante(){
            return $this->representante;
        }
        function getValor(){
            return $this->valor;
        }
        function getObta(){
            return $this->obra;
        }
        function getContratista(){
            return $this->contratista;
        }

        function setNombre($value){
            $this->nombre = $value;
        }
        function setFecha($value){
            $this->fecha = $value;
        }
        function setRepresentante($value){
            $this->representante = $value;
        }
        function setValor($value){
            $this->valor = $value;
        }
        function setObra($value){
            $this->obra = $value;
        }
        function setContratista($value){
            $this->contratista = $value;
        }

        function registrarContrato(){
        
            $conexion = $this->conexion->connect();

            
           $sql =  "INSERT INTO contrato(nombre_contrato,fecha_contrato,representante_legal,
            valor_contrato,fk_obra,fk_contratista) VALUES ('$this->nombre','$this->fecha',
            '$this->representante','$this->valor','$this->obra',
            '$this->contratista')";

            try {
                $conexion->query($sql);
                echo '
                    <script>
                        alert("El contrato se registro correctamente")
                        window.history.go(-1);
                    </script>
                ';
                return "OK";
            } catch (Exception $e) {
                echo '
                    <script>
                        alert("El contrato no se registro correctamente")
                        window.history.go(-1);
                    </script>
                ';
                //echo "Error: {$e->getMessage()} ";
                return $e->getMessage();
            }
    
        }
        
  }

  $contratista = new NuevoContrato($nombre, $fecha, $representante, $valor, $obra, $contratista, $db);

  $contratista->registrarContrato();

?>


