<?php 
session_start();

include 'conexion.php';
$conexion=new conexion();

/**********************************************************************************
 * @file               : model.php.                                             *
 * @brief              : Clase para la gestion de los usuarios (participantes). *
 * @version            : 1.0                                                    *
 * @ultima_modificacion: 27-12-2012                                             *
 * @author             : Daniel Garcia Vargas                                	*
 **********************************************************************************/
class test{
	
	public function  estadoUsuario($apellidos,$correo){
			$consulta = "SELECT `estado` FROM `usuarios` WHERE `usu_apellido` = '$apellidos' AND `usu_correo` = '$correo'";
			$resultado = mysql_query($consulta);
			$row = mysql_fetch_assoc($resultado);
			return $row['estado'];
	}
	
	public function  resultadoUsuario($id){
			$consulta = "SELECT * FROM `resultados` WHERE `res_usuario_id` = '$id'";
			$resultado = mysql_query($consulta);
			$row = mysql_fetch_assoc($resultado);
			return $row;
	}
	
	public function  estadoActualizar($apellidos,$correo){
			$consulta = "UPDATE `usuarios` SET `estado` = 'i' WHERE `usu_correo`='$correo' AND `usu_apellido` ='$apellidos'";
			mysql_query($consulta);
	}
	
	public function cantidadUsuario($nombre,$apellidos,$correo,$profesion,$ocupacion,$sexo,$departamento,$fecha,$municipios,$celular,$telefono,$twitter,$blog,$google,$linkedin,$experiencia,$aprender,$aprender2,$desarrollar,$tic,$tiempo,$horario,$fechaInicio, $ape, $corre, $cedula, $computador, $estrato, $internet, $uso){

			//$consulta = "UPDATE `usuarios` SET `usu_nombre`='$nombre',`usu_apellido`='$apellidos',`usu_correo`='$correo',`usu_profesion`='$profesion',`usu_ocupacion`='$ocupacion',`usu_sexo`='$sexo',`usu_departamento`='$departamento',`usu_celular`='$celular',`usu_tuiter`='$twitter',`usu_blog`='$blog',`usu_google`='$google',`usu_linkedin`='$linkedin',`usu_experiencia`='$experiencia',`usu_aprender`='$aprender',`usu_horario`='$horario',`usu_fecha_inicio`='$fechaInicio',`usu_sector`='$desarrollar',`usu_emprendedor`='$tic',`usu_invertir`='$tiempo', `usu_aprender_2`='$aprender2',`usu_municipios`='$municipios',`usu_telefono`='$telefono',`usu_fecha_nacimiento`='$fecha'  WHERE `usu_correo`='$corre' AND `usu_apellido` ='$ape'";
			$consulta2 = "UPDATE `usuarios` SET `usu_nombre`='$nombre',`usu_apellido`='$apellidos',`usu_correo`='$correo',`usu_profesion`='$profesion',`usu_ocupacion`='$ocupacion',`usu_sexo`='$sexo',`usu_departamento`='$departamento',`usu_celular`='$celular',`usu_tuiter`='$twitter',`usu_blog`='$blog',`usu_google`='$google',`usu_linkedin`='$linkedin',`usu_experiencia`='$experiencia',`usu_aprender`='$aprender',`usu_horario`='$horario',`usu_fecha_inicio`='$fechaInicio',`usu_sector`='$desarrollar',`usu_emprendedor`='$tic',`usu_invertir`='$tiempo',`usu_id_codigo`='',`usu_aprender_2`='$aprender2',`usu_municipios`='$municipios',`usu_telefono`='$telefono',`usu_fecha_nacimiento`='$fecha', `usu_cedula`='$cedula', `usu_computador`='$computador', `usu_estrato`='$estrato', `usu_internet`='$internet', `usu_uso_internet`='$uso', `estado`='' WHERE `usu_apellido` ='$ape' and `usu_correo` ='$corre' ";
			mysql_query($consulta2);		
	}
	
	
	public function  datosUsuario($apellidos,$correo){
			$consulta = "SELECT * FROM `usuarios` WHERE `usu_apellido` = '$apellidos' AND `usu_correo` = '$correo'";
			$resultado = mysql_query($consulta);
			$row = mysql_fetch_assoc($resultado);
			return $row;
	}
	
	public function preguntas($id){
			$consulta = "SELECT * FROM `preguntas` WHERE `id_pregunta` = '$id'";
			$resultado = mysql_query($consulta);
			while ($row = mysql_fetch_assoc($resultado)) {
				$pregunta[0] = $row['id_pregunta'];
				$pregunta[1] = htmlspecialchars($row['pre_pregunta'], ENT_QUOTES);
				$pregunta[2] = $row['pre_tipo'];
			}
			return $pregunta;
	}
	
	public function respuestas($id,$tipo){
			$subConsulta = "SELECT * FROM `respuestas` WHERE `res_idPregunta` = '$id' ORDER BY rand()";
			$subResultado = mysql_query($subConsulta);
			$cont = 0;
			while ($row = mysql_fetch_assoc($subResultado)) {
				$respuestas[$cont] = $row['res_respuesta'];
				$valor[$cont] = $row['res_valor'];
				$idRes[$cont] = $row['respuesta_id'];
				$cont = $cont + 1;
			}
			echo '<form id="form'.$id.'" name="form'.$id.'"><table style="display:inline-block;">';
			for($i = 0; $i< sizeof($respuestas); $i++){
				echo '<tr><td><input type="radio" name="respuesta'.$id.'" id="respuesta'.$id.'" value="'. $valor[$i].'"></td>
					 
					 <td><label class="campo">'.htmlspecialchars($respuestas[$i], ENT_QUOTES).'</label></td></tr>
					 <input type="hidden" id="tipoPre'.$id.'" name="tipoPre'.$id.'" value="'.$tipo.'">
					 ';
			}
			
	}
	
	public function crearTest(){
		
	$pregunta = new test();
	$preguntas = $pregunta->preguntas(1);
	echo '
		<div id="vista1" class="contenedor2Sub">
		<div class="hnea2" id="titulo">
			<h1 style="margin:0 auto;"> PREGUNTA 1/28 </h1>
		</div>
			
		<label class="campo">'.$preguntas[1].'</label><br><br>';
			
		$respuesta = new test();
		$respuestas = $respuesta->respuestas($preguntas[0],$preguntas[2]);
		
		echo '</table><div class="botonVsub"><input type="submit" id="verificar1" name="verificar1" value="Continuar">
				  </div></form>
			 </div>
		';
		
	for($i=2; $i<=28; $i++){
		
		$pregunta = new test();
		$preguntas = $pregunta->preguntas($i);
		echo '
			<div id="vista'.$i.'" class="contenedor2Sub" style="display:none;">
			<div class="hnea2" id="titulo">
				<h1 style="margin:0 auto;"> PREGUNTA '.$i.'/28 </h1>
			</div>
			
			<label class="campo">'.$preguntas[1].'</label><br><br><br>';
			
		
			$respuesta = new test();
			$respuestas = $respuesta->respuestas($preguntas[0],$preguntas[2]);
		
			echo '</table><div class="botonVsub"><input type="submit" id="verificar'.$i.'" name="verificar'.$i.'" value="Continuar">
				  </div></form>
			 </div>
		';
		
		}
		
		echo'
		    <div id="vista29" class="contenedor2Sub" style="display:none;">
  		<h2>Resultados de la Prueba</h2>';
        
		for($j=1; $j<=28; $j++){
	 		echo '<input type="hidden" id="'.$j.'">';
			
		}
		echo'
		<table>
		<tr>
			<td>
		<label class="campo">Conocimientos Generales: </label><input type="text" id="tipo1"  style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;">
	</td>
		</tr>
		<tr>
		<td>
		<label class="campo">Conocimientos en Diseño: </label><input type="text" id="tipo2"  style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;">
	</td>
		</tr>
		<tr>
		<td>
		<label class="campo">Conocimientos en Programación: </label><input type="text" id="tipo3f"  style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;">
	</td>
		</tr>
		<tr>
		<td>
        <p style="display: block;">Has completado la PRUEBA DE NIVEL. Tu puntaje es:  </p><input type="text" id="resultado" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:25pt; border:0px; color:#F7921E;">
        <p>Hemos registrado tus resultados y estamos haciendo la clasificación y selección de los participantes. 
Dependiendo de tus resultados podremos determinar si necesitas un curso previo de nivelación o podrás iniciar de inmediato.

Los Bootcamps inician el próximo 15 de enero de 2013. 

¡Gracias por participar!</p>
		</td>
		</tr>
		</table>
  		</div>
		
		';
  
  	}
	
}

?> 
