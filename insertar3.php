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
        <a href="altascampanias.php">VOLVER</a></li>
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
		$Estado=$_GET["Estado"];
		$Ciudad=$_GET["Ciudad"];
		$Nombre=$_GET["Nombre"];
		$Col_Frac=$_GET["Col_Frac"];
		$Calle=$_GET["Calle"];
		$Numero=$_GET["Numero"];
		   

		include("logica/conexion.php");

	
		$consulta="INSERT INTO Campania (Estado, Ciudad, Nombre, Col_Frac, Calle, Numero) VALUES ('$Estado', '$Ciudad', '$Nombre', '$Col_Frac', '$Calle', '$Numero')";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";
			die(print_r(sqlsrv_errors(), true));

		} else{

			echo "<center><h4>Registro guardado<br><br>"; 

            echo"<table border='1'> <th>ID de la campaña</th> <th>Estado</th> <th>Ciudad</th> <th>Nombre</th> <th>Colonia o fraccionamiento</th>
            <th>Calle</th> <th>Numero</th> ";

			include ("logica/conexion.php");
$solicitud = "SELECT * FROM Campania" ;
$resultado = sqlsrv_query($conn_sis, $solicitud );
                while( $fila= sqlsrv_fetch_array($resultado)){
					
			echo "<tr><td>".$fila['ID_Camp']."</td>";

			echo "<td>".$fila['Estado']."</td>";

			echo "<td>".$fila['Ciudad']."</td>";

			echo "<td>".$fila['Nombre']."</td>";

			echo "<td>".$fila['Col_Frac']."</td>";

			echo "<td>".$fila['Calle']."</td>";

		echo "<td>".$fila['Numero']."</td></tr>";
		}
		}
        echo "</table>";
		sqlsrv_close($conn_sis);


?></section>
</body>
</html>


