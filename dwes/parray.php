<?php 
$array =[];
$array[]= 1;
$array[]= 3;
$array[]= 5;
print_r($array);


$dados=[];
for($i = 0; $i < 6 ; $i++){
    
    $dados[$i]= rand(1,6);
}
print_r($dados);
