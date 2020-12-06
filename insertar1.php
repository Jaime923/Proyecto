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
        <a href="altaspedidos.php">VOLVER</a></li>
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
		//$ID_Pedidos=$_GET["ID_Pedidos"];
		$Dia=$_GET["Dia"];
		$Mes=$_GET["Mes"];
		$Anio=$_GET["Anio"];
		$Hora=$_GET["Hora"];
		$Cancelacion=$_GET["Cancelacion"];
		$FormaDePago=$_GET["FormaDePago"];
		$ID_Producto=$_GET["ID_Producto"];
	$ID_Usuario=$_GET["ID_Usuario"];
		

		include("logica/conexion.php");

	
		$consulta="INSERT INTO Pedidos (Dia, Mes, Anio, Hora, Cancelacion, FormaDePago, ID_Producto, ID_Usuario) VALUES ('$Dia', '$Mes', '$Anio', '$Hora', '$Cancelacion', '$FormaDePago', '$ID_Producto', '$ID_Usuario')";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";
			die(print_r(sqlsrv_errors(), true));

		} else{

			echo "<center><h4>Registro guardado<br><br>"; 

            echo"<table border='1'> <th>ID del Pedido</th> <th>Dia</th> <th>Mes</th> <th>Año</th> <th>Hora</th>
            <th>Cancelacion</th> <th>FormaDePago</th> <th>ID_Producto</th> <th>ID_Usuario</th>";

			include ("logica/conexion.php");
$solicitud = "SELECT * FROM Pedidos" ;
$resultado = sqlsrv_query($conn_sis, $solicitud );
                while( $fila= sqlsrv_fetch_array($resultado)){
					
			echo "<tr><td>".$fila['ID_Pedidos']."</td>";

			echo "<td>".$fila['Dia']."</td>";

			echo "<td>".$fila['Mes']."</td>";

			echo "<td>".$fila['Anio']."</td>";

			echo "<td>".$fila['Hora']."</td>";

			echo "<td>".$fila['Cancelacion']."</td>";

			echo "<td>".$fila['FormaDePago']."</td>";

			echo "<td>".$fila['ID_Producto']."</td>";
echo "<td>".$fila['ID_Usuario']."</td></tr>";
		}
		}
        echo "</table>";
		sqlsrv_close($conn_sis);


?></section>
</body>
</html>


