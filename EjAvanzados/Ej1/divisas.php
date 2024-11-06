<?php
// Todos los valores son en funcion del dolar
define("Dolar", 1 );
define("Euro", 0.5);
define("Yen", 10);

$divisas = [
    "Dolar"=>Dolar,
    "Euro"=>Euro,
    "Yen"=>Yen
];
// Pongo todos los valores en funcion de cuanto seria en dolares,
// asi solo tengo que multiplicar si es de dolar a :
/*define es util para definir constantes,
las constantes no necesitan un $ delante para usarse */
//En caso de que sea otra moneda,la convierto en dolar
//y luego la multiplico.

// define("EUaDO",1/0.5)//1 dolar cuantos euros son
// define("YENaDO",1/10)//1 dolar cuantos yenes

function aDolar($divisa1,$cantidad){
    $dolares = $cantidad/$divisas[$divisa1];
    return $dolares;
};

// $dolares = aDolar($divisa1,$cantidad)

function conversor($divisa1,$cantidad,$divisa2){
    $cant = aDolar($divisa1,$cantidad); 
    $resultado = $divisas[$divisa2] * $cant;
   return $resultado;
};



?>
