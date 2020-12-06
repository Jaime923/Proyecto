<?php
    $serverName= "DESKOP_32920\SQLEXPRESS";
    $connectionInfo= array("Database"=>"NatureMarkers", "UID"=>"sa", "PWD"=>"1234", "CharacterSet" =>"UTF-8");
    $conn_sis= sqlsrv_connect($serverName, $connectionInfo);
    
    if($conn_sis){
      //echo 'conexion exitosa';
    }
    else {
         die(print_r(sqlsrv_errors(), true));
    }
?>



