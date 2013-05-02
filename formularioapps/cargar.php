<?php
include 'php/model.php';
//datos del arhivo 
$nombre_archivo = $_FILES['upcsv']['name']; 
$tipo_archivo = $_FILES['upcsv']['type']; 
$tamano_archivo = $_FILES['upcsv']['size']; 
$ruta_archivo = upcsv;
	echo $nombre_archivo;

		$fecha = date("d-m-y");
		$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$ruta = $destination_path.$nombre_archivo;
	
		move_uploaded_file($_FILES['upcsv']['tmp_name'], $ruta);
		$fp = fopen ( $ruta , "r" );
		$total_registros = 0;
			while (( $data = fgetcsv ( $fp , 1000 , "," )) != FALSE ) { 
				$i = 0; $j = 0;
				foreach($data as $row) {
					$campo[$j][$i] = $row;
					$i++ ;
				}
				echo $campo[$j][3].$campo[$j][4].$campo[$j][5].$campo[$j][7].$campo[$j][9].$campo[$j][1].$campo[$j][2].$campo[$j][9];
				
				$consulta = "INSERT INTO `usuarios`(`usu_nombre`, `usu_apellido`, `usu_correo`, `usu_sexo`, `usu_departamento`,`usu_experiencia`, `usu_aprender`, `usu_municipios`) VALUES ('".$campo[$j][3]."','".$campo[$j][4]."','".$campo[$j][5]."','".$campo[$j][7]."','".$campo[$j][9]."','".$campo[$j][1]."','".$campo[$j][2]."','".$campo[$j][9]."')";
												   
				mysql_query($consulta);
				$j++;
			
			} 	
?>