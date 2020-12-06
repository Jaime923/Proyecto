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
        <li><a href="paginaprincipal.php">VOLVER</a></li>
      </ul>
    <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
     
    </nav>
  </header>

  <?php 
  		
		$id=$_GET["ID_Producto"];
		$nombre=$_GET["Nombre"];
		$tipo=$_GET["Tipo"];
		$precio=$_GET["Precio"];
		

		include("logica/conexion.php");

		
		$consulta="UPDATE Productos SET  nombre='$nombre', tipo='$tipo', precio='$precio' WHERE ID_Producto='$id'";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";

		} else{
			echo "<center><h2>";

			echo "Registro guardado<br><br>"; 

			echo "<table><tr><td>$id</td></tr>";

			echo "<tr><td>$nombre</td></tr>";

			echo "<tr><td>$tipo</td></tr>";

			echo "<tr><td>$precio</td></tr></table></h2></center>";

		}
 


		sqlsrv_close($conn_sis);
  ?>

 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>

</body>
</html>