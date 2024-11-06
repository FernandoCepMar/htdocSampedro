<!-- Crear un array bidimensional asociativo en el que la clave de la primera 
 dimensión será el nombre de los equipos de la primera división 
 de la liga de fútbol. Cada equipo contendrá un array de dos elementos, 
 el primero, con clave “puntos” contiene la puntuación obtenida
  en la pasada liga. El segundo elemento con clave “posición” 
  contendrá en número la posición en la tabla en la que finalizó el 
  equipo la liga. Utilizando los bucles que necesites muestra en pantalla 
  los nombres de los equipos, los puntos y la posición de los equipos 
  que terminaron en las tres primeras posiciones de la liga. -->

<?php

//   $array = [
//   "Rayo Vallecano" => [ "puntos" => 67 , "posicion" => 7 ],
//   "Real Madrid" => 
  
//   ]


// Array de equipos de la Liga Española

$equipos = array(
    "Real Madrid",
    "Barcelona",
    "Atletico de Madrid",
    "Sevilla",
    "Real Betis",
    "Real Sociedad",
    "Villarreal",
    "Valencia",
    "Athletic Club",
    "Celta de Vigo",
    "Osasuna",
    "Espanyol",
    "Mallorca",
    "Rayo Vallecano",
    "Getafe",
    "Alaves",
    "Granada",
    "Las Palmas",
    "Cádiz",
    "Girona",
    "Mostoles",
    "Tres Cantos"
);

//array de posiciones 

// $aux = array_fill(1,22,false);
// $posiciones = [];
// do{
   
//         $ale = rand(1,22);
//         if($aux[$ale] == false){
//             $aux[$ale] = true;
//             $posiciones[] = $ale;

//         }
//     }while(count($posiciones) < 22);

// echo "<pre>";
// print_r($posiciones);
// print_r(array_count_values($posiciones));
// echo "</pre>";

//array de puntos

$puntos = []; 
do {
    $punto = rand(0, 108); 
    $puntos[] = $punto;
} while (count($puntos) < count($equipos)); 

// echo "<pre>";
// rsort($puntos);
/*la diferencia entre sort y asort es
que en sort se modifica el indica en funcion de
como se ordena y en asort se conserva el indice;
0->4
1->15
2-> 3

asort:

2-> 3
0->4
1->15

sort:

0-> 3
1->4
2->15

sort: de menos a mas
rsort: de mas a menos.

*/

//ordeno los puntos de menor a mayor

rsort($puntos);

//revolver el array de equipos

//modo facil

shuffle($equipos);

//modo dificil

$esta = [];
$flag = 0;
$i=0;
$equipoShuffle = [];
while($i < count($equipos) -1){
$posAle = rand(0,count($equipos) -1);
foreach($esta as $pos){
    if($pos == $posAle){
        $flag = 1;
        break;
    }
}
if($flag !=  1){
$equipoShuffle[$i] = $equipos[$posAle];
$esta[] = $posAle;
$i++;
}
$flag = 0;
}

// echo "<pre>";
// print_r($equipoShuffle);
// echo "</pre>";

function hayReps($array){
foreach(array_count_values($array) as $n){
    if($n != 1){
        return true;
    } 
}
return false;

}


// print_r(array_count_values($equipoShuffle));

$final=[];

for($i=0; $i< count($equipos);$i++){
$final[$equipos[$i]] = ["Puntos" => $puntos[$i], "Posicion"=> ($i+1)];
}
//i +1 porque los equipos y puntos empiezan por la posicion 0


//FEO

$hasta3 = 0;
foreach($final as $equipo => $punYpos){
  echo "<p>" . $equipo . "</p>";
  echo "<p>" . print_R($punYpos) . "</p>";
    $hasta3++;
    if($hasta3 == 3){
        break;
    }
}

//BONITO

$hasta3 = 0;
foreach ($final as $equipo => $punYpos) {
    echo "<h3>" . $equipo . "</h3>"; 
    echo "<ul>"; 
    foreach ($punYpos as $key => $valor) {
        echo "<li>" . $key . ": " . $valor . "</li>";  
    }
    echo "</ul>";
    $hasta3++;
    if ($hasta3 == 3) {
        break;
    }
}

// foreach ($punYpos as $key => $valor) {
    //     if($key == "Puntos"){
    //         echo "<li>Puntos: " . $valor ."</li>";
    //     }elseif($key == "Posicion"){
    //         echo "<li>Posicion: " . $valor ."</li>";
    //     }
    // }

// if (in_array($key, ["Puntos", "Posicion"])) {
//     echo "<li>" . $key . ": " . $valor . "</li>";
// }

/*cometi un error antes que es que al intentar crear
el array asociativo, la clave debe estar dentro
de los [] del array que se crea, si no
se englobara todo en un array*/


echo "<pre>";
// print_r($equipos);
// print_r($puntos);
// print_r($final);
echo "</pre>";
?>