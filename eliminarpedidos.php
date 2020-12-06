<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" > 
	<title>Eliminación</title>
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
	$id=$_GET["ID_Pedidos"];
	include("logica/conexion.php");

			$consulta="DELETE FROM Pedidos WHERE ID_Pedidos='$id'";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";

		} else{

			echo "Registro eliminado<br><br>"; 
			
		}
 


		sqlsrv_close($conn_sis);
		
	?>
	 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>

</body>
</html>