<?php 
/*
echo("<script type='text/javascript'> var answer = prompt('Hola juan') </script>");
echo("<script type='text/javascript'> document.write('<h1>'+ answer + '</h1>') </script>");
*/
?>
<!-- al igual que se puede genearar dinamicamente un html mediante echos de php
 tambien se puede generar dinamicamente html a traves de js -->

<!-- no es necesario un html para imprimir etiquetas html -->
 
<?php

    //prompt function
    function prompt($tipo){
        echo "<script type='text/javascript'> var tipo = prompt('$tipo'); </script>";

        echo "<script type='text/javascript'> document.write(tipo); </script>";
        /* la variable print no recoge el valor de la variable tipo sino que recoge un string
        que genera dinamicamente el script capaz de imprimir la variable */ 
    }
    
    echo("Hola, tu nombre es ". prompt("Introduce el tipo de moneda"));

?>