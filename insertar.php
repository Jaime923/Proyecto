<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" >  
	<title>Inserción</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>

</head>
<body>
	<div class="container"> 

  <header>
    <nav>
    <ul><li>
        <a href="paginaprincipal.php">VOLVER</a></li>
      </ul>
      <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
    </nav>
  </header>
<center> 
  <section class="hero" id="hero">
    <h2 class="hero_header"> <span class="light">RESULTADO DE LA INSERCIÓN DE PRODUCTO</span></h2>
	  
   
	</center> 
    
	<?php

		$nombre=$_GET["Nombre"];
		$tipo=$_GET["Tipo"];
		$precio=$_GET["Precio"];
		

		include("logica/conexion.php");

		
		$consulta="INSERT INTO Productos (Nombre, Tipo, Precio) VALUES ('$nombre', '$tipo', $precio)";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";

		} else{

			echo "<center><h4>Registro guardado<br><br>"; 

            echo"<table border='1'> <th>Producto</th> <th>Tipo</th> <th>Precio</th>";

			echo "<tr><td>$nombre</td>";

			echo "<td>$tipo</td>";

			echo "<td>$precio</td></h4></tr></center>";
          

		}
 
        
		sqlsrv_close($conn_sis);



	?></section>
	

</body>
</html>