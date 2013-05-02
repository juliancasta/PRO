<?php 

include 'php/model.php';

session_start();

$apellidos = $_GET['apellido'];
$correo = $_GET['email'];

	$consulta = "SELECT * FROM `usuarios` WHERE `usu_apellido` = '$apellidos' AND `usu_correo` = '$correo'";
	$resultado = mysql_query($consulta);
	$row = mysql_fetch_assoc($resultado);
	
	if(!($row['usu_nombre'])){
		echo '
			
			<html>
				<head>
					<meta http-equiv="REFRESH" content = "0;
					url = registroNoEncontrado.php">
			
				</head>
			</html>
			
			';
			
		exit;
	}

	$actualizar = new test();

	$estado = $actualizar->estadoUsuario($apellidos, $correo);

	if($estado == NULL){

		$datos=$actualizar->datosUsuario($apellidos, $correo);
		
		$_SESSION['apellidos'] = $_GET['apellido'];
		
		$_SESSION['correo'] = $_GET['email'];
		
		$_SESSION['usuario'] = $correo;
		
		$_SESSION['nombre'] = $datos['usu_nombre'];
		
	}
	else{
		echo '
			
			<html>
				<head>
					<meta http-equiv="REFRESH" content = "0;
					url = finalizar.php">
			
				</head>
			</html>
			
			';
			
		exit;
	}

?>
<!DOCTYPE html>
<!-- saved from url=(0100)http://www.apps.co/bootcamps/web.seam;jsessionid=87280CEF23BCD3FF66D857112BF806A2?param=web&cid=2531 -->
<html>
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link class="user" href="css/Codecademystheme.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/jquery-ui.css" />
      <link rel="shortcut icon" href="http://www.apps.co/bootcamps/favicon.ico">
   </head>
   <body>
        <div class="menu">
         	 <div class="apps">		    	
		    	<a href="http://www.apps.co"><img src="css/header.png"></a>
		    </div>
     	 </div>
      <div class="cuerpo">
  
  <div class="contenedor1">
    <p> 
          <h1 style="margin:0 auto; text-align:center;"> PRUEBA DE NIVEL </h1>
          <br>Bienvenid@ (<span style="color:#F7921E;"><?php echo $datos['usu_nombre']; ?></span>) a la PRUEBA DE NIVEL para participar en los BOOTCAMPS de APPS.CO para Desarrollo Web y Móvil. <br> 

<br>A continuación te pedimos confirmar algunos datos y responder las preguntas para evaluar tú nivel de conocimientos. Para la prueba tendrás 20 minutos y es muy IMPORTANTE que la misma, la desarrolles tú solo(a) y a consciencia. Los Bootcamps iniciarán el 15 de enero del 2013 y serán una oportunidad para potenciar tus habilidades técnicas.  
    </p>
  </div>
  <div class="contenedor2">  


  <form class="cmxform" id="datosUsuarios" name="datosUsuarios" action="actualizarDatos.php" method="POST">
  
  <table class="inner">
  
  	<tr>
    	<td class = "ancho1" >
    	<label class="campo">Nombre:  <span class="required">*</span></label>
        </td>
        <td class = "ancho2" >
        <input class="caja required" type="text" id="nombre" name="nombre" value="<?php echo $datos['usu_nombre'];?>">
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Apellidos:   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <input class="caja required" type="text" id="apellidos" name="apellidos" value="<?php echo $datos['usu_apellido'];?>" >
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Correo:   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <input class="caja required" type="text" id="correo" name="correo" value="<?php echo $datos['usu_correo'];?>">
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Cédula de Ciudadanía :   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <input class="caja required" type="text" id="cedula" name="cedula" value="<?php echo $datos['usu_cedula'];?>">
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">¿Tienes computador propio? :  </label>
        </td>
        <td class = "ancho2">
        <select id = "computador" name="computador">
        	<option value="s">Si</option>
            <option value="n">No</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">¿Tienes Internet banda ancha?:   </label>
        </td>
        <td class = "ancho2">
        <select id = "internet" name="internet">
        	<option value="s">Si</option>
            <option value="n">No</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td style="display:inline-block; width:320px;">
    	<label class="campo">En el Ministerio TIC estamos trabajando por una mejor conectividad en todo el País, por eso queremos saber en qué estrato vives actualmente:</label>
        </td>
    	<td>
        <select id ="estrato" name="estrato">
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">¿Cuántas horas al día utilizas Internet?   </label>
        </td>
        <td class = "ancho2">
        <select id = "uso" name="uso">
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Profesión:   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <select id = "profesion" name="profesion">
        	<option value="ingeniero sistemas">Ingeniero Sistemas</option>
            <option value="ingeniero electronico">Ingeniero Electrónico</option>
            <option value="ingeniero civil">Ingeniero Civil</option>
            <option value="ingeniero industrial">Ingeniero Industrial</option>
            <option value="ingeniero multimedia">Ingeniero Multimedia</option>
            <option value="tecnico programador">Tecnico Programador</option>
            <option value="disenador">Diseñador</option>
            <option value="artes">Artes</option>
            <option value="arquitecto">Arquitecto</option>
            <option value="Administrador">Administrador</option>
            <option value="docente">Docente</option>
            <option value="medico">Medico</option>
            <option value="comunicador social">Comunicador Social</option>
            <option value="publicista">Publicista</option>
            <option value="mercadologo">Mercadologo</option>
            <option value="abogado">Abogado</option>
            <option value="economista">Economista</option>
            <option value="recursos humanos">Recursos Humanos</option>
            <option value="contador">Contador</option>
            <option value="otros">Otros</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Ocupación:   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <select id = "ocupacion" name="ocupacion">
        	<option value="empleado">Empleado</option>
            <option value="estudiante">Estudiante</option>
            <option value="empresario">Emprendedor/Empresario</option>
            <option value="desempleado">Sin ocupación</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
    	<label class="campo">Sexo:   <span class="required">*</span></label>
        </td>
        <td class = "ancho2">
        <select id = "sexo" name="sexo">
        	<option value="m" selected>Masculino</option>
            <option value="f">Femino</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td>
    	<label class="campo">Departamento:</label>
        </td>
        <td class="ancho3">
        	<input id="departamento" name="departamento" value="<?php echo $datos['usu_departamento'];?>">  
		</td>
        <td>
            <label class="campo">Municipio:</label>
            </td>
            <td class="ancho3">
            <input id= "municipios" name="municipios" value="<?php echo $datos['usu_departamento'];?>">
            </td>
		</td>
   	</tr>

    <tr>
    	<td class = "ancho1">
        	<label class="campo">Fecha de Nacimiento:   <span class="required">*</span></label>
            </td>
        	<td>
       		<input class="caja required" type="text" id="fecha" name="fecha" value="<?php echo $datos['usu_fecha_nacimiento'];?>">	
        </td>
    </tr>  
    <tr>
    	<td class = "ancho1">
        	<label class="campo">Celular:   <span class="required">*</span></label>
            </td>
        	<td>
       		<input class="caja required" type="text" id="celular" name="celular" value="<?php echo $datos['usu_celular'];?>">	
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
        	<label class="campo">Teléfono:  </label>
            </td>
        	<td>
       		<input class="caja" type="text" id="telefono" name="telefono" value="<?php echo $datos['usu_telefono'];?>">	
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
        	<label class="campo">Twitter:  </label>
            </td>
        	<td>
       		<input class="caja" type="text" id="twitter" name="twitter" value="<?php echo $datos['usu_tuiter'];?>">	
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
        	<label class="campo">Blog:  </label>
            </td>
        	<td>
       		<input class="caja" type="text" id="blog" name="blog" value="<?php echo $datos['usu_blog'];?>">	
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
        	<label class="campo">Google+:  </label>
            </td>
        	<td>
       		<input class="caja" type="text" id="google" name="google" value="<?php echo $datos['usu_google'];?>">	
        </td>
    </tr>
    <tr>
    	<td class = "ancho1">
        	<label class="campo">LinkedIn: </label>
            </td>
        	<td>
       		<input class="caja" type="text" id="linkedin" name="linkedin" value="<?php echo $datos['usu_linkedin'];?>">	
        </td>
    </tr>
    <tr>
    	<table>
            <td class = "ancho1">
                <label class="campo">¿Qué experiencia tienes programando?<span class="required">*</span></label>
            </td>
            <td>
            <input type="radio" name="experiencia" id="experiencia" value="Sin experiencia" <?php $exp= $datos['usu_experiencia']; if($exp=='Sin experiencia'){echo 'checked';}
																							?> ><label> Ninguna</label></td>
            <td>
            <input type="radio" name="experiencia" id="experiencia" value="Hobby" <?php if($exp=='Hobby'){echo 'checked';}
																								
																							?> ><label> Hobby </label></td>
            <td>
            <input type="radio"name="experiencia" id="experiencia" value="Profesional" <?php if($exp=='Profesional'){ echo 'checked';}
																							?> ><label> Profesional</label></td>
           
        </table>
	</tr>
    <tr>
    	<table width="100%">
        <tr>
    	<td class = "ancho1">
        	<label class="campo">¿Qué te gustaría aprender?<span class="required" style="font-size:12px;">(Selecciona máximo 2 cursos en orden de prioridad)</span></label>
        	</td>
        </tr>
        <tr>
    	<td class = "ancho1">
        	  
              <input type="checkbox" name="apren" id="apren" value="ROR" <?php if($datos['usu_aprender']=='ROR'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Web con Ruby On Rails</label><br>
              <input type="checkbox" name="apren" id="apren" value="DJANGO/PHYTON" <?php if($datos['usu_aprender']=='DJANGO/PHYTON'){
																									echo 'checked';
																									}
			
																		?> ><label> Desarrollo Web con Django/Phyton</label><br>
              <input type="checkbox" name="apren" id="apren" value="PHP" <?php if($datos['usu_aprender']=='PHP'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Web con PHP</label><br>
              <input type="checkbox" name="apren" id="apren" value="NODEJS" <?php if($datos['usu_aprender']=='NODEJS'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Web con Node.JS</label><br>
              <input type="checkbox" name="apren" id="apren" value="HTML5" <?php if($datos['usu_aprender']=='HTML5'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Web y Móvil con HTML5 y CSS3</label><br>
              <input type="checkbox" name="apren" id="apren" value="iOS" <?php if($datos['usu_aprender']=='iOS'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Móvil Nativo para iOS</label><br>
              <input type="checkbox" name="apren" id="apren" value="ANDROID" <?php if($datos['usu_aprender']=='ANDROID'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Móvil Nativo para Android</label><br>
              <input type="checkbox" name="apren" id="apren" value="PHONEGAP" <?php if($datos['usu_aprender']=='PHONEGAP'){
																									echo 'checked';
																									}
			
																		?>><label> Desarrollo Crossplatform con PhoneGap y HTML5</label>
              <input type="hidden" name="aprender1" id="aprender1">
              <input type="hidden" name="aprender2" id="aprender2">
		</td>
        </tr>
       </table>
     </tr>
     <tr>
     	<table>
    	<td>
        	<label class="campo">Horario preferido<span class="required">*</span></label>
            <select id= "horario" name="horario">  
                <option value="mananas">Mañanas</option>
                <option value="tardes">Tardes</option>
                <option value="noches">Noches</option>
                <option value="fines de semana">Fines de Semana</option>
                <option value="cualquiera">Cualquiera</option>
              </select>	
        </td>
        <td>
        	<label class="campo">Fecha de Inicio Aprox:<span class="required">*</span></label>
            <input type="text" name="fechaInicio" id="fechaInicio" value="<?php echo $datos['usu_fecha_inicio'];?>">
        </td>
        </table>
    </tr>
    <tr>
    	<table>
    	<td>
        	<label class="campo">¿Para que sector te gustaría desarrollar las aplicaciones?<span class="required">*</span></label>
        </td>
        <td>
        	  <select id= "desarrollar" name="desarrollar">  
                <option value="0">Salud</option>
                <option value="1">Educacion</option>
                <option value="2">Gobierno</option>
                <option value="3">Comerio de productos y servicio</option>
                <option value="4">Medio Ambiente</option>
                <option value="5">Ciudad o Urbanismo</option>
              </select>
        </td>
        </table>
    </tr>
	<tr>
    	<table>
        <tr>
        	<label class="campo" style="display:inline-block;">¿Te gustaría utilizar estas habilidades para convertirte en un emprendedor TIC?<span class="required">*</span></label><br><br><br>
        
        </tr>
        <tr>
        
        <input type="radio" name="tic" id="tic" value="s" checked ><label> Si</label>
        <input type="radio" name="tic" id="tic" value="n" ><label> No</label>
        </tr>
        </table>
    </tr>
    <tr>
    	<table>
        <tr>
           <label class="campo">¿Estas dispuesto a invertir tiempo valioso de tu vida profesional y personal para dedicarselo a tu emprendimiento?<span class="required">*</span></label><br><br><br>           
        </tr>
        <tr><br>
            <input type="radio" name="tiempoGasto" id="tiempoGasto" value="s" checked><label> Si</label>
            <input type="radio" name="tiempoGasto" id="tiempoGasto" value="n" ><label> No</label>
        </tr>
        </table>
    </tr>
  	<tr >  
    <table>
    		<tr>
            <td width="100%"><input class="terminos required" id="terminos" name="terminos" value="s" type="checkbox" checked><label> He leído y acepto el reglamento que contiene los términos y condiciones de la presente convocatoria para hacer parte de la iniciativa Apps.co</label>
            </td>
            </tr>
            <tr>
            <td><div class="boton1"><input id="submit" name="submit"  value="Continuar" type="submit"></div></td>
            </tr>
       </table>
    </tr>
                             
  </form>
  
  </table>
  </div>
  
         
      </div>
     <div class="pie"><img src="css/mintic.png" height="50" style="margin: 0 60px 0 0" width="230"><img src="css/vive.png" height="50" style="margin: 0 60px 0 0"><img src="css/prospe.png">  
        
      </div>
      
      <script src="js/jquery-1.8.3.js" type="text/javascript"></script>
      <script src="js/jquery.validate.js" type="text/javascript"></script>
      <script src="js/jquery-ui.js" type="text/javascript"></script>
      <script type="text/javascript">
		  $(document).ready(function(){
			 $("#datosUsuarios").validate(
						 {
			  rules: {
				cedula: {
				  required: true,
				  number: true
				}
			  }
			}
			 
			 );
		  
		 	 $("#fecha" ).datepicker({ dateFormat: "yy-mm-dd", changeMonth: true,changeYear: true, yearRange: "1901:2013" });
		  
		  	 $("#fechaInicio" ).datepicker({ dateFormat: "yy-mm-dd",  changeMonth: true,changeYear: true, yearRange: "2013: 2015" });
			 
			$("input[type=checkbox][name=apren]").click(function() {

				var bol = $("input[type=checkbox][name=apren]:checked").length >= 2;     
				$("input[type=checkbox][name=apren]").not(":checked").attr("disabled",bol);
				
				var apren = $("input[type=checkbox][name=apren]:checked").val();
				var apren2 = $("input[type=checkbox][name=apren]:checked:last").val();
				
				$("#aprender1").attr("value",apren);
				$("#aprender2").attr("value",apren2);
			
			});
			
			$('#municipios').attr("readonly", true);	
			
			$('#departamento').attr("readonly", true);
			
			
		  });
		  
		  var tic = document.getElementById("tic");
		  tic.checked=true;
		  
		  var tic = document.getElementById("tiempoGasto");
		  tic.checked=true;
		  
	  </script>
   
</body>

</html>

