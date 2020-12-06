<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" >  
	<title>Actualización</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>
	<div class="container"> 

  <header>
    <nav>
    	 <ul>
        <li><a href="altaspedidos.php">VOLVER</a></li>
      </ul>
    <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
     
    </nav>
  </header>

  <?php 
  		
		$ID_Pedidos=$_GET["ID_Pedidos"];
		$Dia=$_GET["Dia"];
		$Mes=$_GET["Mes"];
		$Anio=$_GET["Anio"];
		$Hora=$_GET["Hora"];
		$Cancelacion=$_GET["Cancelacion"];
		$FormaDePago=$_GET["FormaDePago"];
		$ID_Producto=$_GET["ID_Producto"];
	$ID_Usuario=$_GET["ID_Usuario"];
		

		include("logica/conexion.php");

		$consulta="UPDATE Pedidos SET   Dia='$Dia', Mes='$Mes', Anio='$Anio', Hora='$Hora', Cancelacion='$Cancelacion', FormaDePago='$FormaDePago', ID_Producto='$ID_Producto', ID_Usuario='$ID_Usuario' WHERE ID_Pedidos='$ID_Pedidos'";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";
			die(print_r(sqlsrv_errors(), true));

		} else{
			echo "<center><h2>";

			echo "Registro guardado<br><br>"; 

			echo "<table><tr><td>$ID_Pedidos</td></tr>";

			echo "<tr><td>$Dia</td></tr>";
			echo "<tr><td>$Mes</td></tr>";
			echo "<tr><td>$Anio</td></tr>";
			echo "<tr><td>$Hora</td></tr>";
			echo "<tr><td>$Cancelacion</td></tr>";
			echo "<tr><td>$FormaDePago</td></tr>";
			echo "<tr><td>$ID_Producto</td></tr>";
			echo "<tr><td>$ID_Usuario</td></tr></table></h2></center>";

		}
 


		sqlsrv_close($conn_sis);
  ?>

 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>

</body>
</html>