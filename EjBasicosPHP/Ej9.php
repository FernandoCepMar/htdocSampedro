
<?php

// 9. Repetir el ejercicio anterior, pero esta vez la pirámide debe aparecer invertida, esto es,
// con el vértice hacia abajo. 

/*es lo mismo pero las filas ahora en vez de recorrerse de 1 a 9 se recorren de 9 a 1
De esta manera,la primera fila es la que mas asteriscos va a tener ya que 
el bucle for anidado se repite de cada vez mas a cada vez menos.

El for dedicado a sumar los espacios funciona igual, cuanto mayor sea la diferencia
entre el numero de la fila y los asteriscos, mas espacios va a tener */

$asteriscos = "";
$espacios = "";
for($i=9;$i > 0;$i--){
    for($y=1;$y <= $i ; $y++){
        $asteriscos .= " * ";
    }
    for($e=9;$e >= $i ; $e--){
        $espacios .= " ";
    }
    $asteriscos=trim($asteriscos);
    if(strlen($asteriscos) - 2 >=1 and $i != 9){
        for($s=1; $s < strlen($asteriscos) -1; $s++){
            $asteriscos[$s] = " ";
        }
    }
    echo "<pre>". $espacios.$asteriscos.$espacios ."</pre>";

    $asteriscos="";
    $espacios= "";
}
?>



