<?php
    class ConexionBD{
        public $host='localhost';
        public $bbdd='trabajosgrado';
        public $user='root';
        public $password=' ';
        
        public function __construct(){
            try{
                $conexion = new PDO("mysql:host=$this->host;dbname=$this->bbdd",$this->user,$this->password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "conexion establecida";
                return $conexion;
            }catch(Throwable $e){
                echo "Ha ocurrido un problema: ".$e;
            }
        }
    }
    
    $conexion = new ConexionBD();
?>

