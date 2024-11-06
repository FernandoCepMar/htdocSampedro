<?php

/* Escribir un programa PHP que muestre en pantalla números 
aleatorios entre 1 y 500 hasta que aparezca un múltiplo de 7. 
Al terminar el programa se mostrará el mensaje “Fin de programa”.*/

do{
    $n =  rand(1,500);
    echo $n .'<br>';
}while(esMultiplo($n));
echo "FinDelPrograma";

function esMultiplo($n){

    if($n % 7 == 0 && $n >= 7){
        return false;
    }
    return true;
}

?>