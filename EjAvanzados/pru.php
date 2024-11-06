<?php

define("Dolar", 1 );
define("Euro", 0.5);
define("Yen", 10);


function conv($d,$c){
    return $d * $c;
}

$r= conv(Euro,100);
echo $r;
?>


// let v = 1;
// if(isNaN(v)){
//     document.write("no es numero")
// }else{
//     document.write("si no es numero")
// }
