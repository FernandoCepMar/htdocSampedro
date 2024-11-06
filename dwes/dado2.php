<?php

$dados=[];
for($i = 0; $i < 6 ; $i++){
    
    $dados[$i]= rand(1,6);
}
print_r($dados);
echo '"dado'.$dados[$i].'.jpg"';


for($i=0;$i<6;$i++){
   
   echo "<img src=".'"dado'.$dados[$i].'.jpg>"'.">";
}

?>