<?php

<?php 
/*5. Realizar un conversor de divisas euro - dólar - yenes. La conversión deseada se definirá
a través de una variable que permita que, en cada ejecución del programa, se pueda
variar la función de conversión. */

echo "<script> let tipo = prompt('Introduce el tipo de moneda que quieres introducir') ";
echo "let cantidad = parseFloat(prompt('Introduce la cantidad'))";
echo "</script>";

define("Dolar", 1 );
define("Euro", 1.5);
define("Yen", 0.1);

/*define para definir constante define("PI",3,124,true);
en las constantes no hace falta el dolar;
*/

?>


<?php

    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('$prompt_msg'); </script>");
        return $answer;
    }
    $name = prompt("Introduce el tipo de moneda");
    echo("Hola, tu nombre es ". $name);

?>

//prompt function
function prompt($tipo){
    echo "<script type='text/javascript'> var tipo = prompt('$tipo'); </script>";

    $retorno = "<script type='text/javascript'> document.write(tipo); </script>";
    /* la variable print no recoge el valor de la variable tipo sino que recoge un string
    que genera dinamicamente el script capaz de imprimir la variable */
    return $retorno ;
}
$tipo = prompt("Introduce el tipo de moneda");
/*se llama a la funcion y se ejecuta el echo*/
/*el valor de retorno se almacena en name */
echo("Hola, tu nombre es ". $tipo);



function conversor($tipo,$cantidad){
    $ret = "";
if($tipo == "Dolar"){
    $euro = $cantidad * Euro;
    $yen = $cantidad * Yen;

    $ret = $euro . " euros " . $yen . " yenes";

}else if($tipo == "Euro"){
    $dol = $cantidad * Dolar;
    $yen = $cantidad * Yen;

    $ret = $dol . " dolares " . $yen . " yenes ";

}else{
    $euro = $cantidad * Euro;
    $dol = $cantidad * Dolar;

    $ret = $euro . " euros " . $dol . " dolares ";

}
return $ret;
}


$result = conversor($tipo,$cantidad);

?>

<p><?php echo $result ; ?> </p>

<p><?php echo "<script type='text/javascript'> let v = promt('Hola mundo') </script>" ;?>

