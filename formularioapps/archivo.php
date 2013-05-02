<?php 

echo' 
<!DOCTYPE html>
<html>
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
<form action="cargar.php" method="post"  enctype="multipart/form-data">
         <h2>Cargar Datos</h2>

                    	<input type="file" name="upcsv" id="upcsv" size="40"/>
      
                        <input type="submit" name="submit" value="Cargar"/>

         </form>	 
	</body>
</html>';

?>