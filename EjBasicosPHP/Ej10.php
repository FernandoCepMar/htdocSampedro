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
/*como necesito 5 dados, se realiza un bucle para crear un
array de longitud 5, en cada posición, determinada por i
se le asigna la cara al dado, que con la función rand puede ir de 1 a 6 aleatoriamente*/
/*Durante el bucle, se genera dinámicamente cada imagen del dado mediante la etiqueta img,
que hace referencia al archivo jpg */
/*los nombres de las imágenes solo difieren en su número, por lo que mediante las caras que 
se obtienen previamente con rand, se concatena el número de la cara al nombre que tiene como source
el archivo para que muestre la imagen del dado con el número de puntos correspondiente*/

for($i = 0; $i < 5 ; $i++){
    
    $dados[$i]= rand(1,6);
    //echo $dados[$i];
    echo '<img src="dado'.$dados[$i].'.jpg">';
}

//print_r($dados);

$contador=0;
/* el array repetidos consiste en:
la posición (i) es la cara del dado,sería la clave,
y el valor, repetidos(i) sería las veces que se repite esa cara
de manera que el producto de clave y valor obtiene la puntuacion:
2 dados de 2 puntos = 4 puntos */

$repetidos = [0,0,0,0,0,0,0,0];
//inicializo el array con ceros porque si no estaría indefinido.
//el contador sirve para almacenar cuantas veces se repite cada cara
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

/*Esto es lo mismo pero solo mostrandote la mano más ganadora:


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

/*Se recorren las caras y las veces que se repite cada una de ellas
si alguna cara tiene como valor 3,significa que se ha repetido 3 veces,
una vez esto es cierto, se comprueba recorriendo el array otra vez si hay
una cara que se repite dos veces, de ser cierto sería un full*/
/* si una cara se repite 4 veces, entraría en el elseif también 
y la puntuación sería el sumatorio de los dados */
/*el orden de los ifs es importante, el embudo va de más pequeño a más grande
ya que el juego tiene que enseñarte la mano pequeña y la grande */
$dados = [4,4,4,4,1];
$hayDoble=false;
$puntuacion=0;
$hay4 = false;
for($i = 1; $i < count($repetidos) -1 ; $i++){
    $puntuacion=0;
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
          for($i=0;$i < count($repetidos);$i++){
               if($repetidos[$i] == 4){
               for($i= 0; $i < count($dados);$i++){
                $puntuacion += $dados[$i];
                }
                $hay4= true;    
          }
        }
        if($hay4== true){
            echo "<p>Has obtenido un cuatro iguales Puntuacion: ". $puntuacion .  "</p>" ;
        }
    
    }
}


//se ordenan las caras de los dados de menor a mayor
$dados = [4,6,2,3,5];
asort($dados);
echo "rep";
print_r($repetidos);
echo "dados";
print_r($dados);
$cont =0;
/*Se evalúa cada dado recorriendo cada posición del array.
El bucle empieza en 0 como todos los arrays y termina una posición antes
para que no se salga del array al compararlo con el dado de delante.
Ya que si no fuera así se intentaría restar el dado de la posición 5(4+1), y esto
no es posible ya que la última posición es la 4.*/
for($i = 0; $i < count($dados)-1; $i++){

 if($dados[$i+1] - $dados[$i] == 1){
    $cont++;
 }
}

/*el contador cuenta los saltos que se dan en la escalera, de manera que 
en una escalera grande se dan: 1 salto 2, 2 salto 3, 3 salto 4, 4 salto 5.
Total: 4 SALTOS*/

if($cont >=3){
    $puntuacion = 30;
    echo "<p>Has obtenido Escalera pequeña Puntuacion : " . $puntuacion . "</p>";

    if($cont == 4){
        $puntuacion = 50;
        echo "<p>Has obtenido Escalera grande Puntuacion : " . $puntuacion . "</p>";
   
    }
}

echo "<p>Puntuacion final recomendada: " . $puntuacion . "</p";

?>

