<?php

function producto($n1,$n2,$n3 = 1,$n4 = 1,$n5 = 1){
    $resultado = 1;
   $nums = [$n1,$n2,$n3,$n4,$n5];
   foreach ($nums as $var) {
      $resultado *= $var;
   }
   return $resultado;
}

//calcula los numeros primos hasta cierto número

function primosHasta($n){
    $primos = "";
    for($i=1; $i <= $n ; $i++){
        $contador=0;
        for($j = 1; $j <= $i; $j++){
          
            if($i % $j == 0 ){
              
                $contador++;
            }
        }
        if($contador <= 2){
            $primos .= $i . " ";
        }
    }
    echo "Los primos son :" . $primos;
}

//calcular una cantidad de numeros primos.

function primosCant($loop){
    $primos = "";
    $cont=0;
    $i= 1;
    while($loop > $cont){
        $contador=0;
        for($j = 1; $j <= $i; $j++){
          
            if($i % $j == 0 ){
              
                $contador++;
            }
        }
        if($contador <= 2){
            $primos .= $i . " ";
            $cont++;
        }
        $i++;
    }
    echo "Los primos son :" . $primos;
}
    


?>