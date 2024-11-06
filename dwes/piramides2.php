<?php 

$asteriscos = "";
$espacios = "";
for($i=1;$i<=9;$i++){
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

<?php 

$asteriscos = "";
$espacios = "";
for($i=9;$i > 0;$i--){
    for($y=1;$y <= $i ; $y++){
        $asteriscos .= " * ";
    }
    for($e=9;$e >= $i ; $e--){
        $espacios .= "x";
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