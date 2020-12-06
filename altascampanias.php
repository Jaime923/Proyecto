<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" >  
	<title>Altas y Bajas</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>

</head>

	<div class="container"> 
		<header>
    <nav>
    	 
    <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
     
    </nav>
  </header>


  <section class="hero" id="hero">
    <h2 class="hero_header"> <span class="light">ALTAS, BAJAS, CAMBIOS Y CONSULTAS DE CAMPAÑAS</span></h2>
	  
    <p class="tagline">CONSULTA CAMPAÑAS AQUÍ.</p>

<?php
function ejecuta_consulta($labusqueda){
		$labusqueda=$_GET["buscar"];

		include("logica/conexion.php");

		
		$consulta="SELECT * FROM Campania WHERE ID_Camp LIKE '%$labusqueda%'";

		$resultados=sqlsrv_query($conn_sis, $consulta);
 		

		echo"<center><table border='1'><th>ID_Camp</th> <th>Estado</th> <th>Ciudad</th> <th>Nombre</th> <th>Colonia o fraccionamiento</th> 
		<th>Calle</th> <th>Numero</th> </center>";
		while($fila=sqlsrv_fetch_array($resultados)){

		
        echo "<center> <tr><td> ";	

		echo $fila['ID_Camp'] . "</td><td> ";
		echo $fila['Estado'] . "</td><td> ";
		echo $fila['Ciudad'] . "</td><td> ";
		echo $fila['Nombre'] . "</td><td> ";
		echo $fila['Col_Frac'] . "</td><td> ";
    echo $fila['Calle'] . "</td><td> ";
		echo $fila['Numero'] . "</td><td></tr>";
		echo "</center>";
		
		}
		echo "</table></center><br>";
		echo"<center><h1><a href='altascampanias.php'>Volver</a></h1></center>";
		sqlsrv_close($conn_sis);
		}

?>
<body>
	<?php
	@$mibusqueda =$_GET["buscar"];

	$mipag=$_SERVER["PHP_SELF"];

	if($mibusqueda != NULL){

		ejecuta_consulta($mibusqueda);

	}else{
		echo ("<center><form action='" . $mipag . "' method='get'>
			<label>ID_Camp:<input type='text' name='buscar'></label>

			<input type='submit' name='enviando' value='Buscar'>
			</form></center>");}
	?>
	<br> 
<p class="tagline">DA DE ALTA CAMPAÑAS AQUÍ.</p>
<form name="form1" method="get" action="insertar3.php">
  
   <center>
      
      <label>Estado <input type="text" name="Estado" id="Estado"></label>
      <br>
      <label>Ciudad <input type="text" name="Ciudad" id="Ciudad"></label>
      <br>
      <label>Nombre <input type="text" name="Nombre" id="Nombre"></label>
      <br>
      <label>Colonia o fraccionamiento <input type="text" name="Col_Frac" id="Col_Frac"></label>
      <br>
      <label>Calle <input type="text" name="Calle" id="Calle"></label>
      <br>
      <label>Numero <input type="text" name="Numero" id="Numero"></label>
      <br>
      
      <input type="submit" name="enviar" id="enviar" value="Insertar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">ACTUALIZA CAMPAÑAS AQUÍ.</p>
<form name="form2" method="get" action="actualizar3.php">
  
   <center>
      
      <label>ID de la campaña <input type="text" name="ID_Camp" id="ID_Camp"></label>
      <br>
	   <label>Estado <input type="text" name="Estado" id="Estado"></label>
      <br>
      <label>Ciudad <input type="text" name="Ciudad" id="Ciudad"></label>
      <br>
      <label>Nombre <input type="text" name="Nombre" id="Nombre"></label>
      <br>
      <label>Colonia o fraccionamiento <input type="text" name="Col_Frac" id="Col_Frac"></label>
      <br>
      <label>Calle <input type="text" name="Calle" id="Calle"></label>
      <br>
      <label>Numero <input type="text" name="Numero" id="Numero"></label>
      <br>
      <input type="submit" name="enviar" id="enviar" value="Actualizar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">DA DE BAJA CAMPAÑAS AQUÍ.</p>
<form name="form3" method="get" action="eliminar3.php">
  
   <center>
      
      <label>ID de la campaña: <input type="text" name="ID_Camp" id="ID_Camp"></label>
      <br>
   
      <input type="submit" name="enviar" id="enviar" value="Enviar">
    </center><br>
 
</form>




 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>


</body>
</html>