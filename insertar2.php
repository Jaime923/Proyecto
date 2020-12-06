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
        <a href="usuarios.php">VOLVER</a></li>
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
		$Nombre=$_GET["Nombre"];
		$ApeP=$_GET["ApeP"];
		$ApeM=$_GET["ApeM"];
		$Estado=$_GET["Estado"];
		$Ciudad=$_GET["Ciudad"];
		$Col_Frac=$_GET["Col_Frac"];
		$Calle=$_GET["Calle"];
	    $Numero=$_GET["Numero"];
		$NombreDeUsuario=$_GET["NombreDeUsuario"];
	    $Clave=$_GET["Clave"];
		$ID_Camp=$_GET["ID_Camp"];
	   

		include("logica/conexion.php");

	
		$consulta="INSERT INTO Usuario (Nombre, ApeP, ApeM, Estado, Ciudad, Col_Frac, Calle, Numero, NombreDeUsuario, Clave, ID_Camp) VALUES ('$Nombre', '$ApeP', '$ApeM', '$Estado', '$Ciudad', '$Col_Frac', '$Calle', '$Numero', '$NombreDeUsuario', '$Clave', '$ID_Camp')";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";
			die(print_r(sqlsrv_errors(), true));

		} else{

			echo "<center><h4>Registro guardado<br><br>"; 

            echo"<table border='1'> <th>ID del Usuario</th> <th>Nombre</th> <th>Apellido Paterno</th> <th>Apellido Materno</th> <th>Estado</th>
            <th>Ciudad</th> <th>Colonia o fraccionamiento</th> <th>Calle</th> <th>Numero</th> <th>NombreDeUsuario</th> <th>Clave</th> <th>ID de la campaña</th>";

			include ("logica/conexion.php");
$solicitud = "SELECT * FROM Usuario" ;
$resultado = sqlsrv_query($conn_sis, $solicitud );
                while( $fila= sqlsrv_fetch_array($resultado)){
					
			echo "<tr><td>".$fila['ID_Usuario']."</td>";

			echo "<td>".$fila['Nombre']."</td>";

			echo "<td>".$fila['ApeP']."</td>";

			echo "<td>".$fila['ApeM']."</td>";

			echo "<td>".$fila['Estado']."</td>";

			echo "<td>".$fila['Ciudad']."</td>";

			echo "<td>".$fila['Col_Frac']."</td>";

			echo "<td>".$fila['Calle']."</td>";
					
			echo "<td>".$fila['Numero']."</td>";

			echo "<td>".$fila['NombreDeUsuario']."</td>";

			echo "<td>".$fila['Clave']."</td>";

echo "<td>".$fila['ID_Camp']."</td></tr>";
		}
		}
        echo "</table>";
		sqlsrv_close($conn_sis);


?></section>
</body>
</html>


