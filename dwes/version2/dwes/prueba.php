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
    function prompt($prompt_msg){
        echo "<script type='text/javascript'> var answer = prompt('$prompt_msg'); </script>";

        $name = "<script type='text/javascript'> document.write(answer); </script>";
        return $name ;
    }
    $name = prompt("Introduce el tipo de moneda");
    echo("Hola, tu nombre es ". $name);

?>

<?php

    function prompt($prompt_msg){
        echo "<script type='text/javascript'> var name = prompt('$prompt_msg'); </script>";
        /*las variables del ambito de js pertenecen al lado frontend del cliente y no pueden
        usarse en el ambito servidor de php */ 
        return $name;
        /* name */
    }
    $name = prompt("Introduce el tipo de moneda");
    echo("Hola, tu nombre es ". $name);

?>