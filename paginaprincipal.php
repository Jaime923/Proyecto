<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" >  
	<title>Altas, bajas y cambios</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
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
    <h2 class="hero_header"> <span class="light">ALTAS, BAJAS Y CAMBIOS DE PRODUCTOS Y SERVICIOS</span></h2>
	  
    <p class="tagline">CONSULTA ARTÍCULOS AQUÍ.</p>
<!--	 <center><form action="paginaprincipal.php" method="get">
  <p><h4>Nombre: <input type="text" name="nombre" size="40"></h4></p>
  <p>
    <input type="submit" value="Buscar">
  </p>

   </form></center>-->

	<?php
	function ejecuta_consulta($busqueda){
		$labusqueda=$_GET["buscar"];

		include("logica/conexion.php");

		$consulta="SELECT * FROM Productos WHERE Nombre LIKE '%$labusqueda%'";

		$resultados=sqlsrv_query($conn_sis, $consulta);
 		
		echo"<center><table border='1'><th>ID</th> <th>Producto</th> <th>Tipo</th> <th>Precio</th></center>";
		while($fila=sqlsrv_fetch_array($resultados)){

		
        echo "<center> <tr><td> ";	

		echo $fila['ID_Producto'] . "</td><td> ";
		echo $fila['Nombre'] . "</td><td> ";
		echo $fila['Tipo'] . "</td><td> ";
		echo $fila['Precio'] . "</td><td></tr>";
		echo "</center>";
		
		}
		echo "</table></center><br>";
		echo"<center><h1><a href='paginaprincipal.php'>Volver</a></h1></center>";
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
			<label>Artículo:<input type='text' name='buscar'></label>

			<input type='submit' name='enviando' value='Buscar'>
			</form></center>");}
	?><br> 
<p class="tagline">DA DE ALTA ARTÍCULOS AQUÍ.</p>
<form name="form1" method="get" action="insertar.php">
  
   <center>
      
      <label>Nombre: <input type="text" name="Nombre" id="Nombre"></label>
      <br>
      <label>Tipo: <input type="text" name="Tipo" id="Tipo"></label>
      <br>
      <label>Precio: <input type="text" name="Precio" id="Precio"></label>
      <br>
      <br>
      <input type="submit" name="enviar" id="enviar" value="Enviar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">ACTUALIZA ARTÍCULOS AQUÍ.</p>
<form name="form1" method="get" action="actualizar.php">
  
   <center>
      
      <label>ID del producto: <input type="text" name="ID_Producto" id="ID_Producto"></label>
      <br>
      <label>Nombre: <input type="text" name="Nombre" id="Nombre"></label>
      <br>
      <label>Tipo: <input type="text" name="Tipo" id="Tipo"></label>
      <br>
      <label>Precio: <input type="text" name="Precio" id="Precio"></label>
      <br>
      <br>
      <input type="submit" name="enviar" id="enviar" value="Actualizar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">DA DE BAJA ARTÍCULOS AQUÍ.</p>
<form name="form2" method="get" action="eliminar.php">
  
   <center>
      <label>ID del producto: <input type="text" name="ID_Producto" id="ID_Producto"></label>
      <br>
   
      <input type="submit" name="enviar" id="enviar" value="Enviar">
    </center><br>
 
</form>




 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>


</body>
</html>