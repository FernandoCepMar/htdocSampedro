<?php
  unset($_COOKIE['cantidad']);
function preguntaCant($pregunta){
    echo "<script type='text/javascript'> 
        var cant = (prompt('$$pregunta'); 
        document.cookie = 'cantidad='+ cant;
        window.location.reload()
    </script>";
    
        $cant = $_COOKIE['cantidad'];
        return $cant;
}

$cant =(float) preguntaCant("Introduce cantidad");
echo var_dump($cant);
echo $cant;
?>