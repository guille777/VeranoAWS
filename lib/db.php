<?php
  class db{
    //Codigo comentado durante todo el curso, plantillas para examen y a MEJORARRRR!!!

    //se le puede pasar la ipv4 aunque sigue siendo loclahost
    private $ip="localhost";
    private $usuario="root";
    private $contraseña="1234";
    private $db="rapidmurillo";

    protected $conexion;

    private $error=false;
    private $error_msj="";

    function __construct(){
      $this->conexion = new mysqli($this->ip, $this->usuario, $this->contraseña, $this->db);
        if ($this->conexion->connect_errno){
          $this->error=true;
        }
    }

    public function getErrorConexion(){
      return $this->error;
    }
    function msjError(){
      return $this->error_msj;
    }
    public function realizarConsulta($consulta){
      if($this->error==false){
        return $resultado = $this->conexion->query($consulta);
      }else{
        $this->error_msj="Imposible realizar la consulta: ".$consulta;
          return null;
      }
    }
}
?>
