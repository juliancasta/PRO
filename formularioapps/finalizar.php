<?php 

include 'php/model.php';
 

session_start();

$corre= $_SESSION['correo'];

$actualizar = new test();

$resultados = $actualizar->resultadoUsuario($corre);

?>
<!DOCTYPE html>
<!-- saved from url=(0100)http://www.apps.co/bootcamps/web.seam;jsessionid=87280CEF23BCD3FF66D857112BF806A2?param=web&cid=2531 -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link class="user" href="css/Codecademystheme.css" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="http://www.apps.co/bootcamps/favicon.ico">
      <script src="js/jquery-1.8.3.js" type="text/javascript"></script>

   </head>
   <body>
        <div class="menu">
         	 <div class="apps">		    	
		    	<a href="http://www.apps.co"><img src="css/header.png"></a>
		    </div>
     	 </div>
  <div class="cuerpoSub">
  
    <div id="vista6" class="contenedor2Sub">

        <p style="font-size:18px;">Ya has realizado tu prueba. </p>
        <p style="font-size:18px;">Hemos registrado tus resultados y estamos haciendo la clasificación y selección de los participantes. 
Dependiendo de tus resultados podremos determinar si necesitas un curso previo de nivelación o podrás iniciar de inmediato.

Los Bootcamps inician el próximo 15 de enero de 2013. 

¡Gracias por participar!</p>
		<p style="font-size:18px;">Tu puntaje final es:</p>
        <?php echo '<table>
					<tr>
						<td><label class="campo">Conocimientos Generales: </label><input type="text" value="'.$resultados['res_gen'].'/20" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Conocimientos Generales: </label><input type="text" value="'.$resultados['res_dis'].'/40" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Conocimientos Generales: </label><input type="text" value="'.$resultados['res_pro'].'/40" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Resultado Final: </label><input type="text" value="'.$resultados['res_resultado'].'/100" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					</table>'; ?>
  </div>

  
      
     <div class="pieTest"><img src="css/mintic.png" height="50" style="margin: 0 60px 0 0" width="230"><img src="css/vive.png" height="50" style="margin: 0 60px 0 0"><img src="css/prospe.png">  
        
      </div>
      

</body>

</html>