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

//PRUEBA
// $i=0;
// while($i < 10){
//     $e = rand(0,5);
//     echo $e . "<br>";
//     $i++;
// }

// Se puede usar array_fill_keys()

$keys = ["Rayo Vallecano","Real Madrid","Barcelona","Mostoles","Tres Cantos"];

// array_fill_keys($keys,)

//probar tambien array_combine(clave,valor)

//POSICIONES ALEATORIAS

//encontrar una funcion que si encunetra uno duplicado
//retorna false.

    
    //$aux = array_fill_keys(range(1,22),null);
    //tiene mas sentido que las posiciones sean los valores
    $auxx = range(1,22);

// echo "<pre>";
// print_r($aux);
// print_r($auxx);
// echo "</pre>";


// $positions = [];
// $aux = array_fill(1, 22, null);
// $esta = false;

// do{
//     $pos = rand(1,22);
// foreach($aux as $num){
//     if($num == $pos){
//        $esta = true;
//     }else{
//         $num = $pos;
//     }
// }
// if(!$esta){
//     $positions[] = $pos;
// }
// }while(count($positions) < 22);

//hacer lo mismo pero sin necesitar un array auxiliar

// $aux = array_fill(1, 22, null);
// $positions = [];
// $esta = false;
// do{
// foreach($aux as  $clave => &$num){
//     $pos = rand(1,22);
//     if($num == $pos){
//         $esta = true;
//     }
// }
// if(!$esta){
//     $num = $pos;
//     $positions[] = $pos;
// }
// }while(count($positions) < 22);

$posiciones = array_combine(range(1,22),range(1,22));

$liga = array_fill(1,22,null);

// do{
//     foreach($aux as $pos => &$boo){
//         $ale = rand(1,22);
//         if($boo == 0){
//             $boo = 1;

//         }
//     }
// }

$aux = array_fill(1,22,0);
$positions = [];
do{
    for($i = 1; $i < count($aux); $i++){
        $ale = rand(1,22);
        if($aux[$ale] == 0){
            $aux[$ale] = 1;
            $positions[] = $ale;

            echo "<pre>";
print_r($aux);
print_r($positions);
echo "</pre>";
        }
    }

}while(count($positions) < 22);

echo "<pre>";
print_r($positions);
print_r(array_count_values($positions));
echo "</pre>";


//CREAR UN ARRAY ASOCIATIVO con keys DEL 1 AL 20 sin array_fill_keys(range(1,22),null);
//se puede crear un array del 1 al 20 con array fill (1,20,null)

$valores = range(1,22);
/*no hace falta almacenarlo en una variable
se puede tambien usar directamente por ejemplo:
array_combine(range(11,14),range(1,4))*/
//range te genera un array con los valores entre los rangos dados
//si se quiere que el rango vaya de dos en dos por ej, se introduce
//un tercer parametro que es el step, el escalon de numero a numero.
print_r($valores);

//para que el range sea para la clave y no para los valores, se puede
//usar array_fill_keys:

$posiciones = array_fill_keys($valores,null);
//con array_fill_keys obligatoriamente tienes que poner el
//valor asociado, si no se quiere ninguno se puede null

/*con array_fill_keys no se puede poner un array para las 
claves y otro para los valores porque interpreta que cada clave
tiene el array entero a modo de array multidimensional
*/
print_r($posiciones);


/*para crear lo primero se usa <array_combine */
/*Se usan los valores de los dos arrays, no sus claves */
/* los dos arrays deben tener la misma longitud */

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


$posYequipo = array_combine($valores,$equipos);
echo "<pre>";
print_r($posYequipo);
echo "</pre>";


 





$cont = 1;
// foreach($posiciones as $clave => $valor){
// $clave = 1;
// }



?>