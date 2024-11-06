<?php

$arraya = ['a'=> 1, 'b' =>2];
$array = [1,2,3,4,5,6,7];
$array2 = [[1,2,3],[1,2,3]];
$buscar = [1,2,3];




$nuevo = str_replace([1,7],[2,8],$array);

//resultado
echo "<pre>";
print_r($nuevo);
echo "</pre>";

?>

