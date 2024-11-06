<?php
function is_blank($value) {
    return empty($value) && !is_numeric($value);
    /*amabas condiciones deben ser true
    para devolver true. En el momento en que
    una de ellas no se cumple,devuelve false.*/
}

$v = "0";
if(is_blank($v)){
    echo "is blanck";
}else{
    echo "no";
}


/*este caso devuelve false porque es true
que se considera vacio pero es false que no sea
numerico.*/

$v = false;

$r = isset($v);
echo $r;

/*Cuando se imprime el valor de retorno de una
función que retorna un boolean, al hacer echo se
muestra como:
1 si es true,
cadena vacia si es false.

Es por ello que al imprimir una funcion que retorna
false, no se imprime nada, ya que es una cadena vacia*/

?>
