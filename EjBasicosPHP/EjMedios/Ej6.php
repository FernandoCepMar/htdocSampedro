<?php
/*Crear un array unidimensional con 100 números aleatorios entre 1 y 100. 
Mostrar el array en forma de tabla HTML de 10 filas x 10 columnas y sombrear 
en color azul claro (lightblue) los números repetidos.*/

$array = [];
for($i=0; $i< 100; $i++){
    $array[$i] = rand(1,100);
    //tambien puede escribirse $array[] = rand(1,100);
}

function rep(){
    global $array;
    $repetidos = array_fill(0,100,0);
    for($i=0; $i< count($array);$i++){
     for($j=0; $j < count($array); $j++){
         if($array[$i] == $array[$j]){
             $repetidos[$i] += 1;
            //  no puedo sumar 1 ( += ) al array
            //  sin antes rellenarlo de ceros
            //  ya que un número no puede sumarse
            //  a algo que no existe
         }
     }
    }
    return $repetidos;
 }
 $repetidos = rep();

function esRep($cont){
     global $repetidos;
     if($repetidos[$cont] >= 2){
         return true;
     }
     return false;
 }

?>

<!DOCTYPE html>
<body>
   
    <table>
        <?php
        
        /*tambien se puede concatenar el la i y la j
        por ejemplo la celda que se encuentra en la
        fila 2 y en la columna 3 se encuentra en la posicion
        23 de un array unidimensional por lo que 
        es la concatenacion i . j */

        $cont = 0;
        for($i=0; $i < 10;$i++){
            echo "<tr>";
            for($j=0;$j < 10; $j++){
                if(esRep($cont)){
                    echo " <td style='box-shadow: inset lightblue 5px 5px 12px;'>";
                }else{
                    echo "<td>";
                }
                echo $array[$cont];
                 echo "</td>";
                 $cont++;
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
<style>
    td{
        border: 2px black solid;
    }
    table{
        border-collapse: collapse;
        text-align: center;
    }
    </style>

</html>

<!-- echo "<pre>";
 print_r($array);
 echo "</pre>";

 echo "<pre>";

 print_r($repetidos);
 echo "</pre>"; -->

 <!-- otro metodo que sea solo incluir en el 
 array los numeros repetidos.
 Luego hacer un for al array de numeros 
 aleatorios y si array[i] == repetidos[i]
 la casilla se colorea de azul -->

<!-- // function rep2(){
 //     global $array;
 //     $cont=0;
 //     do{
 //         foreach($array as $num){
 //             if()
 //         }
 //         $cont++;
 //     }while($cont < count($array));
         
 // } -->

<!-- Usar tambien la funcion 
de PHP array_count_values -->