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
        <li><a href="usuarios.php">VOLVER</a></li>
      </ul>
    <ul>
        <li><a href="indice.html">INICIO</a></li>
      </ul>
     
    </nav>
  </header>

  <?php 
  		$ID_Usuario=$_GET["ID_Usuario"];
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

		$consulta="UPDATE Usuario SET   Nombre='$Nombre', ApeP='$ApeP', ApeM='$ApeM', Estado='$Estado', Ciudad='$Ciudad', Col_Frac='$Col_Frac', Calle='$Calle', Numero='$Numero', NombreDeUsuario='$NombreDeUsuario', Clave='$Clave', ID_Camp='$ID_Camp'WHERE ID_Usuario='$ID_Usuario'";

		$resultados=sqlsrv_query($conn_sis, $consulta);

		if($resultados==false){

			echo "Error en la consulta";
			die(print_r(sqlsrv_errors(), true));

		} else{
			echo "<center><h2>";

			echo "Registro guardado<br><br>"; 

			echo "<table><tr><td>$ID_Usuario</td></tr>";

			echo "<tr><td>$Nombre</td></tr>";
			echo "<tr><td>$ApeP</td></tr>";
			echo "<tr><td>$ApeM</td></tr>";
			echo "<tr><td>$Estado</td></tr>";
			echo "<tr><td>$Ciudad</td></tr>";
			echo "<tr><td>$Col_Frac</td></tr>";
			echo "<tr><td>$Calle</td></tr>";
			echo "<tr><td>$Numero</td></tr>";
			echo "<tr><td>$NombreDeUsuario</td></tr>";
			echo "<tr><td>$Clave</td></tr>";
			echo "<tr><td>$ID_Camp</td></tr></table></h2></center>";

		}
 


		sqlsrv_close($conn_sis);
  ?>

 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>

</body>
</html>