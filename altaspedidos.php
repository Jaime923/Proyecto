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
    <h2 class="hero_header"> <span class="light">ALTAS, BAJAS, CAMBIOS Y CONSULTAS DE PEDIDOS</span></h2>
	  
    <p class="tagline">CONSULTA PEDIDOS AQUÍ.</p>

<?php
function ejecuta_consulta($labusqueda){
		$labusqueda=$_GET["buscar"];

		include("logica/conexion.php");

		
		$consulta="SELECT * FROM Pedidos WHERE ID_Pedidos LIKE '%$labusqueda%'";

		$resultados=sqlsrv_query($conn_sis, $consulta);
 		

		echo"<center><table border='1'><th>ID_Pedidos</th> <th>Dia</th> <th>Mes</th> <th>Año</th> <th>Hora</th> 
		<th>Cancelación</th> <th>Forma de pago</th> <th>ID_Producto</th> <th>ID_Usuario</th> </center>";
		while($fila=sqlsrv_fetch_array($resultados)){

		
        echo "<center> <tr><td> ";	

		echo $fila['ID_Pedidos'] . "</td><td> ";
		echo $fila['Dia'] . "</td><td> ";
		echo $fila['Mes'] . "</td><td> ";
		echo $fila['Anio'] . "</td><td> ";
		echo $fila['Hora'] . "</td><td> ";
    echo $fila['Cancelacion'] . "</td><td> ";
		echo $fila['FormaDePago'] . "</td><td> ";
		echo $fila['ID_Producto'] . "</td><td> ";
		echo $fila['ID_Usuario'] . "</td><td></tr>";
		echo "</center>";
		
		}
		echo "</table></center><br>";
		echo"<center><h1><a href='altaspedidos.php'>Volver</a></h1></center>";
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
			<label>ID_Pedidos:<input type='text' name='buscar'></label>

			<input type='submit' name='enviando' value='Buscar'>
			</form></center>");}
	?>
	<br> 
<p class="tagline">DA DE ALTA PEDIDOS AQUÍ.</p>
<form name="form1" method="get" action="insertar1.php">
  
   <center>
      
      <label>Dia <input type="text" name="Dia" id="Dia"></label>
      <br>
      <label>Mes <input type="text" name="Mes" id="Mes"></label>
      <br>
      <label>Año <input type="text" name="Anio" id="Anio"></label>
      <br>
      <label>Hora <input type="text" name="Hora" id="Hora"></label>
      <br>
      <label>Cancelacion <input type="text" name="Cancelacion" id="Cancelacion"></label>
      <br>
      <label>Forma de pago <input type="text" name="FormaDePago" id="FormaDePago"></label>
      <br>
      <label>ID del producto <input type="text" name="ID_Producto" id="ID_Producto"></label>
      <br>
      <label>ID del usuario <input type="text" name="ID_Usuario" id="ID_Usuario" </label>
      <br>
      <input type="submit" name="enviar" id="enviar" value="Insertar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">ACTUALIZA PEDIDOS AQUÍ.</p>
<form name="form2" method="get" action="actualizar1.php">
  
   <center>
      
      <label>ID del pedido <input type="text" name="ID_Pedidos" id="ID_Pedidos"></label>
      <br>
      <label>Dia <input type="text" name="Dia" id="Dia"></label>
      <br>
      <label>Mes <input type="text" name="Mes" id="Mes"></label>
      <br>
      <label>Año <input type="text" name="Anio" id="Anio"></label>
      <br>
      <label>Hora <input type="text" name="Hora" id="Hora"></label>
      <br>
      <label>Cancelacion <input type="text" name="Cancelacion" id="Cancelacion"></label>
      <br>
      <label>Forma de pago <input type="text" name="FormaDePago" id="FormaDePago"></label>
      <br>
      <label>ID del producto <input type="text" name="ID_Producto" id="ID_Producto" </label>
      <br>
		  <label>ID del usuario <input type="text" name="ID_Usuario" id="ID_Usuario"></label>
      <br>
      <input type="submit" name="enviar" id="enviar" value="Actualizar">
      <input type="reset" name="Borrar" id="Borrar" value="Borrar">
    </center><br>
 
</form>

<p class="tagline">DA DE BAJA PEDIDOS AQUÍ.</p>
<form name="form3" method="get" action="eliminarpedidos.php">
  
   <center>
      
      <label>ID del pedido: <input type="text" name="ID_Pedidos" id="ID_Pedidos"></label>
      <br>
   
      <input type="submit" name="enviar" id="enviar" value="Enviar">
    </center><br>
 
</form>




 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>


</body>
</html>