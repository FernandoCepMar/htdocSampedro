<?php

$dados=[];

for($i = 0; $i < 5 ; $i++){
    
    $dados[$i]= rand(1,6);
 
    echo '<img src="dado'.$dados[$i].'.jpg">';
}

$contador=0;

$repetidos = [0,0,0,0,0,0,0];

for($i= 0; $i < count($dados); $i++){
    for($j=1; $j <= 6 ; $j++){
        if($dados[$i] == $j){
            $contador +=1;
            $repetidos[$j] += $contador;
        }
    }
    $contador=0;
}

$hayDoble = false;
$hay4 = false;
$puntuacion=0;
for($i = 1; $i < count($repetidos); $i++){
    if($repetidos[$i] >= 3){
        $puntuacion = $i * $repetidos[$i];
        echo "<p>Has obtenido un trio Puntuacion: ". $puntuacion ."</p>" ;
        for($j=1; $j < count($repetidos);$j++){
            if($repetidos[$j] == 2){
                $puntuacion=25;
                $hayDoble = true;
                break;
        }
        }
        }
    if($repetidos[$i] == 4){
        $puntuacion += $dados[$i];
        $hay4= true;
        break;
      }
    }

if($hayDoble == true){
echo "<p>Has obtenido un full: Puntuacion : ". $puntuacion. "</p>";
}elseif($hay4 == true){
echo "<p>Has obtenido un cuatro iguales Puntuacion: ". $puntuacion .  "</p>" ;
}
           
$cont =0;
for($i = 0; $i < count($dados)-1; $i++){
 if($dados[$i+1] - $dados[$i] == 1){
    $cont++;
 }else{
    break;
 }
}
// echo "<pre>";
// var_dump($repetidos);
// echo "</pre>";

if($cont >=3){
    $puntuacion = 30;
    echo "<p>Has obtenido Escalera pequeña Puntuacion : " . $puntuacion . "</p>";

    if($cont == 4){
        $puntuacion = 50;
        echo "<p>Has obtenido Escalera grande Puntuacion : " . $puntuacion . "</p>";
   
    }
}

echo "<p>Puntuacion final recomendada: " . $puntuacion . "</p>";

?>