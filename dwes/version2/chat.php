<?php

// Función para solicitar al usuario una entrada mediante un prompt de JavaScript
function prompt($mensaje){
    echo "<script type='text/javascript'> 
        var respuesta = prompt('$mensaje'); 
        document.cookie = 'respuesta=' + respuesta;  // Guardar la respuesta en una cookie
    </script>";

    // Recuperar la respuesta de la cookie en PHP
    if (isset($_COOKIE['respuesta'])) {
        $valor = $_COOKIE['respuesta'];
        setcookie('respuesta', '', time() - 3600); // Eliminar la cookie
        return $valor;
    }
    return null;
}

// Genera dinámicamente la entrada del tipo de moneda
$tipo = prompt("Introduce el tipo de moneda (Dolar, Euro, Yen)");
// Genera dinámicamente la entrada de la cantidad
$cantidad = prompt("Introduce la cantidad");

// Factores de conversión
define('Dolar', 1.18);  // 1 Euro = 1.18 Dólares
define('Euro', 0.85);   // 1 Dólar = 0.85 Euros
define('Yen', 129.53);  // 1 Euro = 129.53 Yenes

// Función conversor que convierte la cantidad dependiendo del tipo de moneda
function conversor($tipo, $cantidad) {
    $ret = "";
    
    if($tipo == "Dolar"){
        $euros = $cantidad * Euro;
        $yenes = $cantidad * Yen;
        $ret = "$cantidad dólares son $euros euros y $yenes yenes";
        
    } elseif($tipo == "Euro"){
        $dolares = $cantidad * Dolar;
        $yenes = $cantidad * Yen;
        $ret = "$cantidad euros son $dolares dólares y $yenes yenes";
        
    } elseif($tipo == "Yen"){
        $euros = $cantidad / Yen;
        $dolares = $euros * Dolar;
        $ret = "$cantidad yenes son $euros euros y $dolares dólares";
        
    } else {
        $ret = "Tipo de moneda no reconocido.";
    }
    
    return $ret;
}

// Solo ejecuta la conversión si se ha recibido el tipo y la cantidad
if ($tipo && $cantidad) {
    $result = conversor($tipo, $cantidad);
    echo "<h1>Resultado de la conversión:</h1>";
    echo "<p>$result</p>";
} else {
    echo "<p>No se pudo obtener el tipo de moneda o la cantidad</p>";
}
?>
