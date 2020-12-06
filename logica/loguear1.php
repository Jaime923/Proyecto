<?php
session_start();
require 'conexion.php';
$usuario = $_POST['NombreDeUsuario'];
$clave = $_POST['Clave'];


$q = "SELECT COUNT(*) as contar FROM Usuario where NombreDeUsuario = '$usuario' and Clave = '$clave' ";
$consulta = sqlsrv_query($conexion,$q);
$array = sqlsrv_fetch_array($consulta);

if($array['contar']>0){
   $_SESSION['username'] = $usuario;
  header("location: ../altaspedidos.php");
}else {
    echo "<h1>Datos incorrectos</h1> <br> ";
    echo "<a href='../login1.php'>Volver</a>";
}
?>