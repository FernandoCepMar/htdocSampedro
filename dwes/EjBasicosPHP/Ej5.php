<?php
/*5. Realizar un conversor de divisas euro - dólar - yenes. La conversión deseada se definirá
a través de una variable que permita que, en cada ejecución del programa, se pueda
variar la función de conversión. */

/*
function preguntaTipo($pregunta){
    echo "<script type='text/javascript'> 
        var tipo = prompt($pregunta); 
        document.cookie = 'tipoDeMoneda='+ tipo;
    </script>";
        $tipo = $_COOKIE['tipoDeMoneda'];
        return $tipo;
}

function preguntaCant($pregunta){
    echo "<script type='text/javascript'> 
        var cant = (prompt($pregunta); 
        document.cookie = 'cantidad='+ cant;
    </script>";
        $cant = $_COOKIE['cantidad'];
        return $cant;
}

$tipo = preguntaTipo("Introduce el tipo de moneda");
$cant =(float) preguntaCant("Introduce cantidad");

        */

    
define("Dolar", 1 );
define("Euro", 1.5);
define("Yen", 0.1);
/*define es util para definir constantes,
las constantes no necesitan un $ delante para usarse */

$tipo="Dolar";
$cant = 1;


function conversor($tipo,$cantidad){
    $ret = "";
    $tipo = strtolower($tipo);
if($tipo == "dolar"){
    $euro = $cantidad * Euro;
    $yen = $cantidad * Yen;

    $ret = $cantidad . " dolares son ".$euro . " euros " . $yen . " yenes";

}else if($tipo == "euro"){
    $dol = $cantidad * Dolar;
    $yen = $cantidad * Yen;

    $ret = $cantidad . " euros son ". $dol . " dolares " . $yen . " yenes ";

}else if($tipo == "yen"){
    $euro = $cantidad * Euro;
    $dol = $cantidad * Dolar;

    $ret = $cantidad . " yenes son ". $euro . " euros " . $dol . " dolares ";

}else{
    echo "No se reconoce la moneda";
}
return $ret;
}

$result = conversor($tipo,$cant);

echo $result;

?>
