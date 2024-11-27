<?php

include "../env/conexion.php";

try {
    $bd = new PDO($dsn,$usuario,$password);
    // $sql = "SELECT * FROM PRODUCTO;";
    // $consulta = $bd->query($sql);
    // print_r($consulta);

    $sql = "SELECT codigo,nombre,precio FROM PRODUCTO;";
    $consulta = $bd->query($sql);
    foreach($consulta as $fila){
       echo $fila['codigo'] . " ";
       echo $fila["nombre"];
    }
}catch(PDOException $e){
    echo "Error (". $e->getCode(). ") al abrir" .
    "la base de datos :" . $e->getMessage();
}



?>