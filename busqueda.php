<!DOCTYPE html>
<html lang="en-US">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilos.css" />

<link rel="shortcut icon" href="images/nofondo.png" > 
<head>
	<title>Búsqueda de artículos</title>
	<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">

<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
	<div class="container"> 

  <header>
    <nav>
    <ul>
        <li><a href="indice.html">INICIO</a></li>
        <li><a href="productos.html">ATRÁS</a></li>
      </ul>
     </nav>
 </header>
    
    <section class="hero" id="hero">
	<?php
	function ejecuta_consulta($labusqueda)
	{
		require ("logica/conexion.php");
		$conexion=mysqli_connect($host, $usuario, $clave);

		if (mysqli_connect_errno()){

			echo "Fallo al conectar con la BBDD";

			exit();
	}
	mysqli_select_db($conexion, $bd) or die ("No se encuentra la BBDD");

		sqlsrv_set_charset($conexion, "utf8");

		$consulta="SELECT * FROM productos WHERE nombre LIKE '%$labusqueda%'";

		$resultados=sqlsrv_query($conexion, $consulta);

		echo"<center><table border='1'><th>ID</th> <th>Producto</th> <th>Tipo</th> <th>Precio</th></center>";
		while($fila=sqlsrv_fetch_array($resultados, MYSQLI_ASSOC)){

		echo "<center><tr><td>";
		echo $fila['IDProducto'] . "</td><td> ";
		echo $fila['nombre'] . "</td><td> ";
		echo $fila['tipo'] . "</td><td> ";
		echo $fila['precio'] . "</td><td></tr>";
		echo "</center>";
		
		}
		echo "</table></center><br>";
		mysqli_close($conexion);
	}
		
	?>
</head>
<body>
<?php
	@$mibusqueda =$_GET["buscar"];

	$mipag=$_SERVER["PHP_SELF"];

	if($mibusqueda != NULL){

		ejecuta_consulta($mibusqueda);

	}else{
		echo ("<center><form action='" . $mipag . "' method='get'>
			<label>Artículo:<input type='text' name='buscar'></label>

			<input type='submit' name='enviando' value='Buscar'>
			</form></center>");
	}


?>






<br>

 <div class="copyright">&copy;2020 - <strong>Nature Markers</strong></div>
	 </div>

</body>
</html>