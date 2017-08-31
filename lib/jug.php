<?php 
/**
* 
*/
include "db.php";
class Jugador extends db{

	private $error=false;
	
	function __construct()
	{
		parent::__construct();
	}
	public function insertarJugador($nombre,$posicion,$numero){
	$sqlInsercion="INSERT INTO jugadores(id_jug,nombre,posicion,numero) Values(NULL,'".$nombre."','".$posicion."','".$numero."'')";
	     $resultado=$this->realizarConsulta($sqlInsercion);
	     if ($resultado!=null) {
	     	return true;
	     }else{
	     	return false;
	     }
	}
	public function mostrarJug(){
		$sql="SELECT * FROM jugadores";
		return $resultado=$this->realizarConsulta($sql);
	}







}




 ?>