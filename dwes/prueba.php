<?php 
phpinfo();
?>
<p><?php echo "<script> alert('Hola mundo') </script>" ;?> </p>

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

<p><?php echo $result ; ?> </p>

<p><?php echo "<script type='text/javascript'> let v = promt('Hola mundo') </script>" ;?> </p>


<?php

    //prompt function
    function prompt($tipo){
        echo "<script type='text/javascript'> var tipo = prompt('$tipo'); </script>";

        $retorno = "<script type='text/javascript'> document.write(tipo); </script>";
        /* la variable print no recoge el valor de la variable tipo sino que recoge un string
        que genera dinamicamente el script capaz de imprimir la variable */
        return $retorno ;
    }
    $name = prompt("Introduce el tipo de moneda");
    /*se llama a la funcion y se ejecuta el echo*/
    /*el valor de retorno se almacena en name */
    echo("Hola, tu nombre es ". $name);


?>

<?php

    //prompt function
    function prompt($tipo){
        echo "<script type='text/javascript'> var tipo = prompt('$tipo'); </script>";

        echo "<script type='text/javascript'> document.write(tipo); </script>";

    }
    echo("Hola, tu nombre es ". prompt("Introduce el tipo de moneda"));


?>
<?php

function msg(){
    echo "<script type='text/javascript'> document.write('hola') </script> ";
}
echo "Saludos a: " . msg();
/* Resultado: JuanSaludos a:

en una linea de codigo, php ejecuta primero las funciones, de manera que
si la funcion tiene un echo, este se imprime inmediatamente.
es por esto que el echo de la funcion se imprime antes.
Para que la funcion se imprima despues del saludo, el contenido debe devolverse como
valor de retorno de la funcion.
En este caso el valor de retorno es null por lo que no se visualiza: JuanSaludos a: NULL
?>


<?php

    function prompt($prompt_msg){
        echo "<script type='text/javascript'> var name = prompt('$prompt_msg'); </script>";
        /*las variables del ambito de js pertenecen al lado frontend del cliente y no pueden
        usarse en el ambito servidor de php */
        /* esto es debido a que js y php se ejecutan en sitios y momentos diferenets,
        php se ejecuta primero en el lado del servidor y luego lo envia al cliente,
        y el cliente ejecuta el js */
        return $name;
        /* name es una variable indefinida,no puede acceder al script*/
    }
    $name = prompt("Introduce el tipo de moneda");
    echo("Hola, tu nombre es ". $name);

?>