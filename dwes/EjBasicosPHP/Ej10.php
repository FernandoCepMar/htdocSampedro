<?php

/*10) Escribir un programa que genere en cada ejecución una tirada de Yahtzee! indicando un resumen de las jugadas posibles y 
cuál es la recomendada.

El juego de Yahtzee! emplea 5 dados de 6 caras y las combinaciones posibles son:

3 de una clase: Debes obtener tres dados iguales. Sumas la puntuación de todos esos dados.
4 de una clase: Debes obtener cuatro dados iguales. Sumas la puntuación de todos los dados.
Full: Debes obtener tres dados de una clase y dos de otra. Por ejemplo, tres de 1 y dos de 5. Esta jugada vale 25 puntos.
Escalera pequeña: Debes obtener cuatro dados consecutivos. Por ejemplo: 1, 2, 3 y 4 o 3, 4, 5 y 6. Esta jugada vale 30 puntos.
Escalera grande: Debes obtener cinco dados consecutivos. Por ejemplo: 1, 2, 3, 4 y 5 o 2, 3, 4, 5 y 6. Esta jugada vale 40 puntos.
Yahtzee: Debes obtener cinco dados iguales de la misma clase. Esta jugada vale 50 puntos.
*/

$dados=[];
for($i = 0; $i < 5 ; $i++){
    
    $dados[$i]= rand(1,6);
    //echo $dados[$i];
    echo '<img src="dado'.$dados[$i].'.jpg">';
}

//print_r($dados);

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
//print_r($repetidos);

/*

$hayDoble=false;
$puntuacion=0;
for($i = 1; $i < count($repetidos); $i++){
    if($repetidos[$i] == 4){
        echo "<p>Has obtenido un cuatro iguales </p>" ;
        for($i= 0; $i < count($dados);$i++){
            $puntuacion += $dados[$i];
            echo "<p>Puntuacion : " . $puntuacion . "</p";
        }
    }else if($repetidos[$i] == 3){
    $puntuacion = $i * $repetidos[$i];
      for($i=0;$i < count($repetidos);$i++){
        if($repetidos[$i] == 2){
            echo "<p>Has obtenido un full</p>";
            $puntuacion=25;
            $hayDoble = true;
        }
      }
      if($hayDoble == false){
        echo "<p>Has obtenido un trio </p>" ;
      }
      echo "<p>Puntuacion : " . $puntuacion . "</p";
    }
}

*/



$hayDoble=false;
$puntuacion=0;
for($i = 1; $i < count($repetidos); $i++){

    if($repetidos[$i] >= 3){
        $puntuacion = $i * $repetidos[$i];
        echo "<p>Has obtenido un trio Puntuacion: ". $puntuacion ."</p>" ;
          for($i=0;$i < count($repetidos);$i++){
            if($repetidos[$i] == 2){
                $puntuacion=25;
                $hayDoble = true;
            }
          }
          if($hayDoble == true){
            echo "<p>Has obtenido un full: Puntuacion : ". $puntuacion. "</p>";
          }
        }
    elseif($repetidos[$i] == 4){
        for($i= 0; $i < count($dados);$i++){
            $puntuacion += $dados[$i];
        }
        echo "<p>Has obtenido un cuatro iguales Puntuacion: ". $puntuacion .  "</p>" ;
    
    }
}

$dados = [1,2,3,4,5];

asort($dados);
$cont =0;
for($i = 0; $i < count($dados)-1; $i++){

 if($dados[$i+1] - $dados[$i] == 1){
    $cont++;
 }
}


if($cont >=4){
    $puntuacion = 30;
    echo "<p>Has obtenido Escalera pequeña Puntuacion : " . $puntuacion . "</p>";

    if($cont == 5){
        $puntuacion = 50;
        echo "<p>Has obtenido Escalera grande Puntuacion : " . $puntuacion . "</p>";
   
    }
}

echo "<p>Puntuacion final recomendada: " . $puntuacion . "</p";

?>

