<?php 

// 8. Repetir el ejercicio anterior, pero esta vez la pirámide estará hueca (se debe ver
// únicamente el contorno hecho con asteriscos).

$asteriscos = "";
$espacios = "";
for($i=1;$i<=9;$i++){
    for($y=1;$y <= $i ; $y++){
        $asteriscos .= " * ";
    }
    for($e=9;$e >= $i ; $e--){
        $espacios .= " ";
    }
    /*Como el string de asteriscos tiene espacios entre ellos,
    uso la funcion trim que al igual que en java,elimina los espacios a ambos lados
    trim no modifica el array que se le introduce como parámetro sino que 
    retorna uno nuevo, por lo que lo igualo al string original */
    $asteriscos=trim($asteriscos);
    if(strlen($asteriscos) - 2 >=1 and $i != 9){
        /*solo se mete en el for si no es la ultima fila y si
        tiene asteriscos en medio a parte de los del contorno,por ej. : 3 o más ya que 3-2 >=1*/
        for($s=1; $s < strlen($asteriscos) -1; $s++){
            $asteriscos[$s] = " ";
        }/*se recorre el string menos la primera y la ultima posición que serian los asteriscos del contorno
         y se sustituye por espacios el resto */
    }

    echo "<pre>". $espacios.$asteriscos.$espacios ."</pre>";

    $asteriscos="";
    $espacios= "";
}

?>