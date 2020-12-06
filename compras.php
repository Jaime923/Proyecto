<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/nofondo.png" >  
	<title>Comprar</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<body>

	<div class="container"> 

  <header>
    <nav>
    <ul><li>
        <a href="pedidos.html">VOLVER</a></li>
      </ul>
      <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
    </nav>
  </header>
<center> 
  <section class="hero" id="hero">
    <h2 class="hero_header"> <span class="light">PEDIDO REALIZADO</span></h2>
	  
   
	</center> 
	<?php
	$idp=$_GET["idp"];
		$nombre=$_GET["nombre"];
		$estado=$_GET["estado"];
		$municipio=$_GET["municipio"];
		$direccion=$_GET["direccion"];
		$cp=$_GET["cp"];
		$pago=$_GET["pago"];
		$fecha=$_GET["fecha"];
		

		require("logica/conexion.php");

		$conexion=mysqli_connect($host, $usuario, $clave);

		if (mysqli_connect_errno()){

			echo "Fallo al conectar con la BBDD";

			exit();
		}

		mysqli_select_db($conexion, $bd) or die ("No se encuentra la BBDD");

		mysqli_set_charset($conexion, "utf8");

		$consulta="INSERT INTO pedidos (IDProducto, nombre, estado, municipio, direccion, cp, pago, fecha) VALUES ('$idp', '$nombre', 
		'$estado', '$municipio', '$direccion', '$cp', '$pago', '$fecha')";

		$resultados=mysqli_query($conexion, $consulta);

		if($resultados==false){

			echo "Error en la consulta";

		} else{

			echo "<center><h4>Pedido realizado<br><br>"; 

            echo"<table border='1'> <th>ID del Producto</th> <th>Nombre</th> <th>Estado</th> <th>Municipio</th> <th>Dirección</th>
            <th>C.P.</th> <th>Pago</th> <th>Fecha</th>";

			echo "<tr><td>$idp</td>";

			echo "<td>$nombre</td>";

			echo "<td>$estado</td>";

			echo "<td>$municipio</td>";

			echo "<td>$direccion</td>";

			echo "<td>$cp</td>";

			echo "<td>$pago</td>";

			echo "<td>$fecha</td></h4></tr></center>";
          

		}
 
        
		mysqli_close($conexion);

	?>
</section>

</body>
</html>