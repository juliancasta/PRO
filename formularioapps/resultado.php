<?php

session_start();

require 'php/class.phpmailer.php';
require 'php/class.smtp.php';

$ape= $_SESSION['apellidos'];
$corre= $_SESSION['correo'];

include 'php/model.php';

$id = $_POST['id'];
$res = $_POST['res'];
$pun1 = $_POST['ing'];
$pun2 = $_POST['dis'];
$pun3 = $_POST['tec'];

$actualizar = new test();

$estado = $actualizar->estadoActualizar($ape, $corre);

$consulta = "INSERT INTO `resultados`(`res_usuario_id`, `res_resultado`,`res_gen`, `res_dis`, `res_pro`) VALUES ('".$id."','".$res."','".$pun1."','".$pun2."','".$pun3."')";
mysql_query($consulta);

	$resultados = $actualizar->resultadoUsuario($corre);
	
	$mail = new PHPMailer();
	$correo = $corre;
	$dominio = explode("@", $correo);
	$sub = utf8_decode("Resultados Prueba Apps.co"); 
	$altbody = utf8_decode("Resultados Prueba Apps.co");
	$body = '
				<html>
				<head>
				   <title>Correo Appsco</title>
				</head>
				<body>
				<h1>Resultado Prueba Apps.co</h1>
				
				    <div id="vista6" class="contenedor2Sub">

        <p style="font-size:18px;">Ya has realizado tu prueba de nivel. </p>
		<p style="font-size:18px;">Tu puntaje final es:</p>
        <table>
					<tr>
						<td><label class="campo">Conocimientos Generales: </label><input type="text" value="'.$resultados['res_gen'].'/20" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Conocimientos de Diseño: </label><input type="text" value="'.$resultados['res_dis'].'/40" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Conocimientos en Programación: </label><input type="text" value="'.$resultados['res_pro'].'/40" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<tr>
						<td><label class="campo">Resultado Final: </label><input type="text" value="'.$resultados['res_resultado'].'/100" style="background-color:#F2F2F2; font-family:sans-serif;
	font-style:normal;
	font-size:18pt; border:0px; color:#F7921E;"></td>
					</tr>
					<p>Hemos registrado tus resultados y estamos haciendo la clasificación y selección de los participantes. 
Dependiendo de tus resultados podremos determinar si necesitas un curso previo de nivelación o podrás iniciar de inmediato.

Los Bootcamps inician el próximo 15 de enero de 2013. 

¡Gracias por participar!</p>
					
  </div>
				</body>
				</html> '
	;
	$mail->IsSMTP(); 
	$mail->Host = "ssl://smtp.gmail.com";
	$mail->Port = "465";
	$mail->From = "info@apps-co.com";
	$mail->FromName = "Iniciativa Apps.co";
	$mail->Subject = $sub; 
	$mail->AltBody = $altbody; 
	$mail->MsgHTML($body);
	$mail->AddAddress("$correo", "$dominio[1]");
	$mail->SMTPAuth = true;
	$mail->Username = "info@apps-co.com";
	$mail->Password = "ministerioapps2526"; 
	$mail->Send();

?>