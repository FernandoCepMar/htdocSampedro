<?php 
for($i=1;$i<=9;$i++){
    for($y=1;$y <= $i ; $y++){
        echo "x";
 
    }

}
?>

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
    echo "<pre>". $espacios.$asteriscos.$espacios ."</pre>";
    $asteriscos="";
    $espacios= "";
}

?>