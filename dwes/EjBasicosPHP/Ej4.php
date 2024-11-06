<?php
/* 4. Escribir un programa que utilice dos variables, una de tipo decimal y la otra de un tipo
distinto (binaria, octal o hexadecimal), y asígnales valores. A continuación, muestra por
pantalla cada una de las variables y un resumen de los tipos de operaciones vistas en
clase. Los valores elegidos para las variables deben permitir su aplicación para todas
las operaciones.*/

$vardec = 12;
$varoct = 012;

echo "<p> Variable decimal </p>". $vardec;
echo "<p> Variable octal  </p>". $varoct ;



?>
<div>
    <p>Multiplicacion: $vardec * $varoct =<?php echo $vardec * $varoct; ?></p>
    <p>Division : vardec / $varoct =<?php echo $vardec / $varoct; ?></p>
    <p>Suma : vardec + $varoct = <?php echo $vardec + $varoct ;?></p>
    <p>Modulo ( Resto de división ) : vardec % $varoct = <?php echo $vardec % $varoct ; ?></p>

</div>
</html>



