<?php

$keys = ["id","nombre"];

$array = [[1,"spock"],[2,"panfi"]];
$final = [];

for($i= 0; $i < count($array);$i++){
    $cachos= array_combine($keys,$array[$i]);
    array_push($final,$cachos);
    

};
echo "<pre>";
print_r($final);
echo "<pre>";


?>