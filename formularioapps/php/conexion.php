<?php 
class conexion{
	
	private $conexion_bd;
	
	public function conexion(){ 
			
			if (!($conexion_bd=mysql_connect("localhost","daniel.garcia","Dg2012"))){ 
				echo "Error conectando a la base de datos."; 
				exit(); 
			} 
			if (!mysql_select_db("appsco_bd",$conexion_bd)){ 
				echo "Error seleccionando la base de datos."; 
				exit(); 
			}
	}
}
?>

