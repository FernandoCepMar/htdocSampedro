

Hola mundo.

<?php
/*1. Escribir un programa que muestre por pantalla el mensaje “Hola mundo” de, al menos,
tres formas distintas (se puede alternar formas estáticas, dinámicas, con variables,
constantes, etc.).
*/
$frase = "Hola mundo";

$hola = "hola";
$mundo = "mundo";

echo $hola . " " . $mundo;

echo $frase;
?>

<html>
<head>


<?php

    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('$prompt_msg'); </script>");
        return $answer;
    }
    $name = prompt("Introduce el tipo de moneda");
    echo("Hola, tu nombre es ". $name);

?>

<?php

/*2. Escribir un programa que muestre el nombre, apellidos, curso, teléfono y dirección
(pueden ser ficticios) de un alumno por pantalla. Cada dato se debe mostrar en una
línea, debiendo destacar los datos personales mediante estilos.*/

$nombre = "Juan";
$apellido = "Baltasar";
$curso = "2DAW";
$tel = 636547493;
$dir = "calle momo";
?>

<?php
echo "<p> $nombre </p>";
echo "<p> $apellido </p>";
echo "<p> $curso </p>";
echo "<p> $tel </p>";
echo "<p> $dir </p>";
?>
<?php
/*3. Escribir un programa que muestre el horario de clase mediante una tabla. Se deben
aplicar los estilos visuales necesarios para que cada asignatura tenga una apariencia
única distinta del resto.*/

function aleatorio(){
    return rand(0,255);
}

/* 4. Escribir un programa que utilice dos variables, una de tipo decimal y la otra de un tipo
distinto (binaria, octal o hexadecimal), y asígnales valores. A continuación, muestra por
pantalla cada una de las variables y un resumen de los tipos de operaciones vistas en
clase. Los valores elegidos para las variables deben permitir su aplicación para todas
las operaciones.*/

$vardec = 12;
$varoct = 012;

?>
<style>
    p{
        background-color: rgb(49, 106, 106);
        width:20%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: red;
        text-align: center;
        padding: 3px;
    }
    table{
        text-align: center;
        
        border-collapse: collapse;
       
    }
    td,th{
        border: rgb(<?php echo aleatorio() ?> ,<?php echo aleatorio() ?> , <?php echo aleatorio() ?> ) solid 4px;
        background-color: rgb(<?php echo aleatorio() ?> ,<?php echo aleatorio() ?> , <?php echo aleatorio() ?> );
    }
</style>


</head>
<body>
    <div align="middle">
    <table>
        <th colspan = "3">HORARIO</th>
        <tr>
            <td>Inglés</td>
            <td>Conocimiento del medio</td>
            <td>Plastica</td>
        </tr>
        <tr>
            <td colspan="3">RECREO</td>
        </tr>
        <tr>
            <td>Matematicas</td>
            <td>Lengua</td>
            <td>Historia</td>
        </tr>
    </table>
</div>



<?php echo "<p> Variable decimal </p>". $vardec;
      echo "<p> Variable octal  </p>". $varoct ;
?>

<br><br>
<span>
define para definir constante define("PI",3,124,true);
en las constantes no hace falta el dolar;
</span>




 
<?php 
/*5. Realizar un conversor de divisas euro - dólar - yenes. La conversión deseada se definirá
a través de una variable que permita que, en cada ejecución del programa, se pueda
variar la función de conversión. */

echo "<script> let tipo = prompt('Introduce el tipo de moneda que quieres introducir') ";
echo "let cantidad = parseFloat(prompt('Introduce la cantidad'))";
echo "</script>";

define("Dolar", 1 );
define("Euro", 1.5);
define("Yen", 0.1);



?>


</body>
</html>



