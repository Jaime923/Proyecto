<?php
session_start();
require 'conexion.php';
$usuario = $_POST['NombreDeUsuario'];
$clave = $_POST['Clave'];


$query= sqlsrv_query($conn_sis,"SELECT * FROM Usuario WHERE NombreDeUsuario ='$usuario' AND  Clave= '$clave'")or die (sqlsrv_error($conn_sis));
 //$res= sqlsrv_prepare($conn_sis, $query);
 

 while ($f=sqlsrv_fetch_array($query)) {
 	$arreglo[]=array('NombreDeUsuario'=>$f['NombreDeUsuario'],'Clave'=>$f['Clave'] );
 }
 if (isset($arreglo)) {
 	$_SESSION['NombreDeUsuario']=$arreglo;
 	header("Location: ../indice.html");
 }
  else{
	header("Location: ../login.php?error=Datos no validos");

}
?>
