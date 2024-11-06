<?php 

// 7. Escribir un programa que pinte por pantalla una pirámide rellena a base de asteriscos.
// La base de la pirámide debe estar formada por 9 asteriscos.

$asteriscos = "";
$espacios = "";
//el primer bucle for crea cada fila de la pirámide
for($i=1;$i<=9;$i++){
    for($y=1;$y <= $i ; $y++){
        //para cada fila,para cada vuelta del for anterior se guarda el 
        //mismo numero de * que el número de la fila en la que se encuentre $i
        //de esta manera, si se esta en la fila 3, el string tendrá 3 asteriscos 
        $asteriscos .= " * ";
    }
    for($e=9;$e >= $i ; $e--){
        $espacios .= " ";
    }/*es un bucle que va al revés, el numero
    de la fila es inversamente proporcional al numero de espacios */
    echo "<pre>". $espacios.$asteriscos.$espacios ."</pre>";
    /*el navegador cuando le llega un echo con un string con muchos espacios,
    los colapsa todos a un solo, de manera que para mantener los espacios en la salida
    existe la etiqueta <pre> que mantiene el formato de cómo se escribe dentro de ella.

    Además, como <pre> es una etiqueta de bloque, cada vez que se imprime la fila de la
    piramide, no hace falta hacer echo "<br>" en el for que cambia de fila a fila ya que
    el propio <pre> hace el salto de línea
    */
    $asteriscos="";
    $espacios= "";
    //reinicio,vacío los strings cada vez que se cambia de fila 
}

?>



<?php

//es lo mismo pero variando los valores límite
$asteriscos = "";
$espacios = "";
for($i=0;$i<=9;$i++){
    for($y=0;$y < $i ; $y++){
        $asteriscos .= " * ";
    }
    for($e=9;$e > $i ; $e--){
        $espacios .= " ";
    }
    echo "<pre>". $espacios.$asteriscos.$espacios ."</pre>";
    $asteriscos="";
    $espacios= "";
}
?>