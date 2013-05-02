<?php
session_start();

include 'php/model.php';

$ape= $_SESSION['apellidos'];
$corre= $_SESSION['correo'];


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$profesion = $_POST['profesion'];
$ocupacion = $_POST['ocupacion'];
$sexo = $_POST['sexo'];
$departamento = $_POST['departamento'];
$fecha = $_POST['fecha'];
$municipios = $_POST['municipios'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];
$twitter = $_POST['twitter'];
$blog = $_POST['blog'];
$google = $_POST['google'];
$linkedin = $_POST['linkedin'];
$experiencia = $_POST['experiencia'];
$aprender = $_POST['aprender1'];
$aprender2 = $_POST['aprender2'];
$desarrollar = $_POST['desarrollar'];
$tic = $_POST['tic'];
$tiempo = $_POST['tiempoGasto'];
$terminos = $_POST['terminos'];
$horario = $_POST['horario'];
$fechaInicio = $_POST['fechaInicio'];
$cedula = $_POST['cedula'];
$computador = $_POST['computador'];
$estrato = $_POST['estrato'];
$internet = $_POST['internet'];
$uso = $_POST['uso'];

	$actualizar = new test();

	$actualizar->cantidadUsuario($nombre,$apellidos,$correo,$profesion,$ocupacion,$sexo,$departamento,$fecha,$municipios,$celular,$telefono,$twitter,$blog,$google,$linkedin,$experiencia,$aprender,$aprender2,$desarrollar,$tic,$tiempo,$horario,$fechaInicio,$ape, $corre, $cedula, $computador, $estrato, $internet, $uso);
	
		echo '
			
			<html>
				<head>
					<meta http-equiv="REFRESH" content = "0;
					url = test.php">
			
				</head>
			</html>
			
			';
			
		exit;
	
	
?>


