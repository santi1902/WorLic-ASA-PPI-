
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

  

    class NuevoContratista {
        private $nombre;
        private $segundo_nombre;
        private $apellido;
        private $segundo_apellido;
        private $cedula;
        private $celular;
        private $email;
        public $conexion;

        function __construct($nombre, $segundo_nombre, $apellido, $segundo_apellido, $cedula, $celular, $email, $conexion) {
            $this->nombre = $nombre;
            $this->segundo_nombre = $segundo_nombre;
            $this->apellido = $apellido;
            $this->segundo_apellido = $segundo_apellido;
            $this->cedula = $cedula;
            $this->celular = $celular;
            $this->email = $email;
            $this->conexion = $conexion;
        }


        function getNombre(){
            return $this->nombre;
        }
        function getSegundo_nombre(){
            return $this->segundo_nombre;
        }
        function getApellido(){
            return $this->apellido;
        }
        function getSegundo_apellido(){
            return $this->segundo_apellido;
        }
        function getCedula(){
            return $this->cedula;
        }
        function getCelular(){
            return $this->celular;
        }
        function getEmail(){
            return $this->email;
        }

        function setNombre($value){
            $this->nombre = $value;
        }
        function setSegundo_nombre($value){
            $this->segundo_nombre = $value;
        }
        function setApellido($value){
            $this->apellido = $value;
        }
        function setSegundo_apellido($value){
            $this->segundo_apellido = $value;
        }
        function setCedula($value){
            $this->cedula = $value;
        }
        function setCelular($value){
            $this->celular = $value;
        }
        function setEmail($value){
            $this->email = $value;
        }

        function registrarContratista(){
        
            $conexion = $this->conexion->connect();

            $sql =  "INSERT INTO contratista(id_contratista,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,identificacion,telefono,email,fk_tipo_documento)
            VALUES ('NULL','$this->nombre','$this->segundo_nombre','$this->apellido','$this->segundo_apellido','$this->cedula','$this->celular','$this->email','1')";
            
            try {
                $conexion->query($sql);
                echo '
                    <script>
                        alert("El contratista se registro correctamente")
                        window.history.go(-1);
                    </script>
                ';
                return "OK";
            } catch (Exception $e) {
                echo '
                    <script>
                        alert("El contratista no se registro correctamente")
                        window.history.go(-1);
                    </script>
                ';
                //echo "Error: {$e->getMessage()} ";
                return $e->getMessage();
            }
    
        }
        
  }

  $contratista = new NuevoContratista($nombre, $segundo_nombre, $apellido, $segundo_apellido, $cedula, $celular, $email, $db);

  $contratista->registrarContratista();

?>


