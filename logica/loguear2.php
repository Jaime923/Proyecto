<?php
session_start();
require 'conexion.php';
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$q = "SELECT COUNT(*) as contar FROM usuarios where usuario = '$usuario' and clave = '$clave' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
   $_SESSION['username'] = $usuario;
  header("location: ../altascampanias.php");
}else {
    echo "<h1>Datos incorrectos</h1> <br> ";
    echo "<a href='../login2.php'>Volver</a>";
}
?>