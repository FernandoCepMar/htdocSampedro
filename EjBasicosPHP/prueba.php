<?php

$a = 1;
echo $a;

echo "<p>";

function prueba($a){
    $a++;
    return $a;
 }

echo prueba($a);
echo $a;

echo "</p>";


function prueba2(){
   global $a;
   $a++;
   return $a;
}

echo prueba2();
echo $a;

?>