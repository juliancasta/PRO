<?php 

session_start();

include 'php/model.php'; 

$ape= $_SESSION['apellidos'];
$corre= $_SESSION['correo'];

$actualizar = new test();

$estado = $actualizar->estadoUsuario($ape, $corre);

if($estado == 'i'){
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
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link class="user" href="css/Codecademystheme.css" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="http://www.apps.co/bootcamps/favicon.ico">
      <script src="js/jquery-1.8.3.js" type="text/javascript"></script>
      <script>
	  	var count=30000;
	  		
		var myVar=setInterval(function(){timer()},1000);
				
		function timer()
		{
		  count=count-1;
		  if (count <= 0)
		  {
	
			 var id = $("#identificador").val();
				
			 var pun1 = Number($("#tipo1").val());
			 var pun2 = Number($("#tipo2").val());
			 var pun3 = Number($("#tipo3f").val());
				
		 	 pun1 = pun1.toFixed(1);
			 pun2 = pun2.toFixed(1);
			 pun3 = pun3.toFixed(1);
			 
			 var res=Number(pun1)+Number(pun2)+Number(pun3);
			 
			 res = parseInt(res);
			 pun1 = parseInt(pun1);
			 pun2 = parseInt(pun2);
			 pun3 = parseInt(pun3);
			 
			 $.post("resultado.php",{id: id,res: Number(res), ing:Number(pun1), dis: Number(pun2), tec: Number(pun3)}, function(){alert(id + res)},"json");
	
			 
			 alert('Tu tiempo a finalizado');
			 
			 location.reload();
			
			 clearInterval(myVar);
			 
			 return;
		  }
		
		var d=new Date(count*1000);
		var hora = (d.getHours()==0)?23:d.getHours()-1;
		var hora = (hora<9)?"0"+hora:hora;
		var minuto = (d.getMinutes()<9)?"0"+d.getMinutes():d.getMinutes();
		var segundo = (d.getSeconds()<9)?"0"+d.getSeconds():d.getSeconds();
		 document.getElementById("demo").innerHTML=minuto+":"+segundo + " Min"; // watch for spelling
		}
	  
		  $(document).ready(function() {
		
			
			$("#form1").submit(function(e){
				var a = Number($("#vista1 input:radio:checked").length);
				if(a  > 0){
				$("#vista1").css('display','none');
				$("#vista2").css('display','block');
				$("#verificar1").css('display','none');
				var valor=$("#vista1 input:radio:checked").val() ;
				var tipo=$("#tipoPre1").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				
				$("#1").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form2").submit(function(e){
				var a = Number($("#vista2 input:radio:checked").length);
				if(a  > 0){
				$("#vista2").css('display','none');
				$("#vista3").css('display','block');
				$("#verificar2").css('display','none');
				var valor=$("#vista2 input:radio:checked").val();
				var tipo=$("#tipoPre2").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#2").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form3").submit(function(e){
				var a = Number($("#vista3 input:radio:checked").length);
				if(a  > 0){
				$("#vista3").css('display','none');
				$("#vista4").css('display','block');
				$("#verificar3").css('display','none');
				var valor=$("#vista3 input:radio:checked").val() ;
				var tipo=$("#tipoPre3").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#3").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form4").submit(function(e){
				var a = Number($("#vista4 input:radio:checked").length);
				if(a  > 0){
				$("#vista4").css('display','none');
				$("#vista5").css('display','block');
				$("#verificar4").css('display','none');
				var valor=$("#vista4 input:radio:checked").val() ;
				var tipo=$("#tipoPre4").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#4").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form5").submit(function(e){
				var a = Number($("#vista5 input:radio:checked").length);
				if(a  > 0){
				$("#vista5").css('display','none');
				$("#vista6").css('display','block');
				$("#verificar5").css('display','none');
				var valor=$("#vista5 input:radio:checked").val() ;
				var tipo=$("#tipoPre5").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#5").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form6").submit(function(e){
				var a = Number($("#vista6 input:radio:checked").length);
				if(a  > 0){
				$("#vista6").css('display','none');
				$("#vista7").css('display','block');
				$("#verificar6").css('display','none');
				var valor=$("#vista6 input:radio:checked").val() ;
				var tipo=$("#tipoPre6").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#6").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form7").submit(function(e){
				var a = Number($("#vista7 input:radio:checked").length);
				if(a  > 0){
				$("#vista7").css('display','none');
				$("#vista8").css('display','block');
				$("#verificar7").css('display','none');
				var valor=$("#vista7 input:radio:checked").val() ;
				var tipo=$("#tipoPre7").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#7").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form8").submit(function(e){
				var a = Number($("#vista8 input:radio:checked").length);
				if(a  > 0){
				$("#vista8").css('display','none');
				$("#vista9").css('display','block');
				$("#verificar8").css('display','none');
				var valor=$("#vista8 input:radio:checked").val() ;
				var tipo=$("#tipoPre8").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#8").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}
				return false;
			});
			
			$("#form9").submit(function(e){
				var a = Number($("#vista9 input:radio:checked").length);
				if(a  > 0){
				$("#vista9").css('display','none');
				$("#vista10").css('display','block');
				$("#verificar9").css('display','none');
				var valor=$("#vista9 input:radio:checked").val() ;
				var tipo=$("#tipoPre9").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#9").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form10").submit(function(e){
				var a = Number($("#vista10 input:radio:checked").length);
				if(a  > 0){
				$("#vista10").css('display','none');
				$("#vista11").css('display','block');
				$("#verificar10").css('display','none');
				var valor=$("#vista10 input:radio:checked").val() ;
				var tipo=$("#tipoPre10").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#10").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form11").submit(function(e){
				var a = Number($("#vista11 input:radio:checked").length);
				if(a  > 0){
				$("#vista11").css('display','none');
				$("#vista12").css('display','block');
				$("#verificar11").css('display','none');
				var valor=$("#vista11 input:radio:checked").val() ;
				var tipo=$("#tipoPre11").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#11").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form12").submit(function(e){
				var a = Number($("#vista12 input:radio:checked").length);
				if(a  > 0){
				$("#vista12").css('display','none');
				$("#vista13").css('display','block');
				$("#verificar12").css('display','none');
				var valor=$("#vista12 input:radio:checked").val() ;
				var tipo=$("#tipoPre12").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#12").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form13").submit(function(e){
				var a = Number($("#vista13 input:radio:checked").length);
				if(a  > 0){
				$("#vista13").css('display','none');
				$("#vista14").css('display','block');
				$("#verificar13").css('display','none');
				var valor=$("#vista13 input:radio:checked").val() ;
				var tipo=$("#tipoPre13").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#13").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form14").submit(function(e){
				var a = Number($("#vista14 input:radio:checked").length);
				if(a  > 0){
				$("#vista14").css('display','none');
				$("#vista15").css('display','block');
				$("#verificar14").css('display','none');
				var valor=$("#vista14 input:radio:checked").val() ;
				var tipo=$("#tipoPre14").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#14").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form15").submit(function(e){
				var a = Number($("#vista15 input:radio:checked").length);
				if(a  > 0){
				$("#vista15").css('display','none');
				$("#vista16").css('display','block');
				$("#verificar15").css('display','none');
				var valor=$("#vista15 input:radio:checked").val() ;
				var tipo=$("#tipoPre15").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#15").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form16").submit(function(e){
				var a = Number($("#vista16 input:radio:checked").length);
				if(a  > 0){
				$("#vista16").css('display','none');
				$("#vista17").css('display','block');
				$("#verificar16").css('display','none');
				var valor=$("#vista16 input:radio:checked").val() ;
				var tipo=$("#tipoPre16").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#16").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form17").submit(function(e){
				var a = Number($("#vista17 input:radio:checked").length);
				if(a  > 0){
				$("#vista17").css('display','none');
				$("#vista18").css('display','block');
				$("#verificar17").css('display','none');
				var valor=$("#vista17 input:radio:checked").val() ;
				var tipo=$("#tipoPre17").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#17").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form18").submit(function(e){
				var a = Number($("#vista18 input:radio:checked").length);
				if(a  > 0){
				$("#vista18").css('display','none');
				$("#vista19").css('display','block');
				$("#verificar18").css('display','none');
				var valor=$("#vista18 input:radio:checked").val() ;
				var tipo=$("#tipoPre18").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#18").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form19").submit(function(e){
				var a = Number($("#vista19 input:radio:checked").length);
				if(a  > 0){
				$("#vista19").css('display','none');
				$("#vista20").css('display','block');
				$("#verificar19").css('display','none');
				var valor=$("#vista19 input:radio:checked").val() ;
				var tipo=$("#tipoPre19").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#19").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form20").submit(function(e){
				var a = Number($("#vista20 input:radio:checked").length);
				if(a  > 0){
				$("#vista20").css('display','none');
				$("#vista21").css('display','block');
				$("#verificar20").css('display','none');
				var valor=$("#vista20 input:radio:checked").val() ;
				var tipo=$("#tipoPre20").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#20").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form21").submit(function(e){
				var a = Number($("#vista21 input:radio:checked").length);
				if(a  > 0){
				$("#vista21").css('display','none');
				$("#vista22").css('display','block');
				$("#verificar21").css('display','none');
				var valor=$("#vista21 input:radio:checked").val() ;
				var tipo=$("#tipoPre21").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#21").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form22").submit(function(e){
				var a = Number($("#vista22 input:radio:checked").length);
				if(a  > 0){
				$("#vista22").css('display','none');
				$("#vista23").css('display','block');
				$("#verificar22").css('display','none');
				var valor=$("#vista22 input:radio:checked").val() ;
				var tipo=$("#tipoPre22").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#22").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form23").submit(function(e){
				var a = Number($("#vista23 input:radio:checked").length);
				if(a  > 0){
				$("#vista23").css('display','none');
				$("#vista24").css('display','block');
				$("#verificar23").css('display','none');
				var valor=$("#vista23 input:radio:checked").val() ;
				var tipo=$("#tipoPre23").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#23").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form24").submit(function(e){
				var a = Number($("#vista24 input:radio:checked").length);
				if(a  > 0){
				$("#vista24").css('display','none');
				$("#vista25").css('display','block');
				$("#verificar24").css('display','none');
				var valor=$("#vista24 input:radio:checked").val() ;
				var tipo=$("#tipoPre24").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#24").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form25").submit(function(e){
				var a = Number($("#vista25 input:radio:checked").length);
				if(a  > 0){
				$("#vista25").css('display','none');
				$("#vista26").css('display','block');
				$("#verificar25").css('display','none');
				var valor=$("#vista25 input:radio:checked").val() ;
				var tipo=$("#tipoPre25").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#25").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form26").submit(function(e){
				var a = Number($("#vista26 input:radio:checked").length);
				if(a  > 0){
				$("#vista26").css('display','none');
				$("#vista27").css('display','block');
				$("#verificar26").css('display','none');
				var valor=$("#vista26 input:radio:checked").val() ;
				var tipo=$("#tipoPre26").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#26").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form27").submit(function(e){
				var a = Number($("#vista27 input:radio:checked").length);
				if(a  > 0){
				$("#vista27").css('display','none');
				$("#vista28").css('display','block');
				$("#verificar27").css('display','none');
				var valor=$("#vista27 input:radio:checked").val() ;
				var tipo=$("#tipoPre27").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						$("#tipo3f").attr("value",(Number($("#tipo3f").val())+Number(valor)));
					}
				}
				$("#27").attr("value",valor);
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
			$("#form28").submit(function(){
				var a = Number($("#vista28 input:radio:checked").length);
				if(a  > 0){
				$("#vista28").css('display','none');
				$("#vista29").css('display','block');
				$("#titulo").css('display','none');
				$("#verificar28").css('display','none');
				var valor=$("#vista28 input:radio:checked").val() ;
				var tipo=$("#tipoPre28").val();
				if(Number(valor) > 0){
					if(tipo == 'i'){
						$("#tipo1").attr("value",(Number($("#tipo1").val())+Number(valor)));
					}else if(tipo == 'd'){
						$("#tipo2").attr("value",(Number($("#tipo2").val())+Number(valor)));
					}else if(tipo == 't'){
						var num =Number($("#tipo3f").val())+Number(valor);
						num = Number(num);
						num = num.toFixed(1);
						num = parseInt(num);
						$("#tipo3f").attr("value",num);
					}
				}
				
				if(Number($("#tipo1").val()) == 0){
					$("#tipo1").attr("value",'0');
				}
				if(Number($("#tipo2").val()) == 0){
					$("#tipo2").attr("value",'0');
				}
				if(Number($("#tipo3f").val()) == 0){
					$("#tipo3f").attr("value",'0');
				}
				
				
				$("#28").attr("value",valor);
				
				var res = 0;
				
				for(var j=1; j<=28; j++){
				var dato=Number($("#vista29 input#"+j).val());
				var res = res + dato;
				}
			
				res = res.toFixed(1);
				var id = $("#identificador").val();
				
				var pun1 = Number($("#tipo1").val());
				var pun2 = Number($("#tipo2").val());
				var pun3 = Number($("#tipo3f").val());
				
				pun1 = pun1.toFixed(1);
				pun2 = pun2.toFixed(1);
				pun3 = pun3.toFixed(1);
				
				res = parseInt(res);
				
				$.post("resultado.php",{id: id,res: res, ing: pun1, dis: pun2, tec: pun3}, function(){alert(id + res)},"json");
				
				res = parseInt(res);
				
				$("#tipo1").attr("value", pun1+"/20");
				
				$("#tipo2").attr("value", pun2+"/40");
				
				$("#tipo3f").attr("value", pun3+"/40");
			
			 	clearInterval(myVar);
				
				$("#demo").css('display','none');
				
				$("#resultado").attr("value", res+"/100");
				}else{
					alert('Debe seleccionar una respuesta');
				}return false;
			});
			
		  });
   
	  </script>
   </head>
   <body>
        <div class="menu">
         	 <div class="apps">		    	
		    	<a href="http://www.apps.co"><img src="css/header.png"></a>
		    </div>
     	 </div>
  <div class="cuerpoSub">
  
  <div class="contenedor1Sub" >
  		<p id="demo" style="margin:0 auto; position:relative; float:right; top:10px; right:30px;"></p>
  	    <h3 style="margin:0 auto; position:relative; top:10px; left:30px; display:inline;"> Usuario: <?php echo $_SESSION['nombre']; ?></h3>
<input type="hidden" id="identificador" name="identificador" value="<?php echo $_SESSION['usuario']; ?>">
        <img  src="css/reloj_r2_c2.png" style="margin:0 auto; position:relative; float:right; top:5px; right:40px;">
  </div>
    	  
  <?php
  		
		$crear = new test();

		$crear->crearTest();
  
  ?>

 
     <div class="pieTest"><img src="css/mintic.png" height="50" style="margin: 0 60px 0 0" width="230"><img src="css/vive.png" height="50" style="margin: 0 60px 0 0"><img src="css/prospe.png">  
        
      </div>
      

</body>

</html>