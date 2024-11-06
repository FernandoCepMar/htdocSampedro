<?php

/*Usando dos arrays que contengan los valores: 4,12,-5,8,13,-9,0,3 y 1,-2,3,-6,4,12,-7,-8,
 calcular la media aritmética de cada uno empleando funciones y, posteriormente, mostrar por pantalla
 y separados por dos puntos “:” aquellos números que sean mayores a dicha media. Tómese como solución 
 la siguiente referencia:
 */

 $a1 = [4,12,-5,8,13,-9,0,3];
 $a2 = [1,-2,3,-6,4,12,-7,-8];


function media($array){
    $media = 0;
    foreach($array as $num){
        $media += $num;
    }
    $media = $media/count($array);
    return $media;
}

$m1 = media($a1);
$m2 = media($a2);

echo "media 1 " . $m1;
echo "<br>";
echo "media 2" . $m2;


function imp($array,$media){
$s = "";

    foreach($array as $num){
        if($num > $media){
            $s .= $num . " ";
        }
    }
    $s = trim($s);
    $s = str_replace(" ",":", $s);
    echo $s;

}

echo "<br>";
echo "array1 --> ";
imp($a1,$m1);
echo "<br>";
echo "array2 --> ";
echo imp($a2,$m2);

 ?>