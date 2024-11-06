
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr><th colspan="11">Tabla de multiplicar</th></tr>
    <?php 

/* (6) Escribir un programa que dibuje una tabla de multiplicar.
El programa debe ser capaz de variar su ejecución en función de la tabla elegida o, si se desea, 
pintar todas las tablas de multiplicar.*/

$tablaElegida = 9;

/*El for no va de 0 a < 10 porque los html no enumeran
las filas o columnas de una tabla de la misma manera que los arrays
sino que se enumeran a partir del 1. Además va hasta el 11 ya que se incluye una columna para el 0 */
for($y=1; $y <=(10+1);$y++){
    $r = rand(0, 250);
    $g = rand(0, 250);
    $b = rand(0, 250);
    echo "<style> td:nth-child($y) {background-color: rgb($r,$g,$b);} </style>";
   }
/*el td:nth-child es una propiedad de html que permite en este caso hacer columnas de colores
ya que colorea del mismo color todas las zeldas que se encuentran en la posicion de y */
   
/*el primer for recorre crea las filas, para ello se usa la etiqueta <tr>*/
/*dentro de esta es donde se van creando las celdas con la etiqueta <td>.
El número de celdas corresponde con el numero de columnas por lo que dependiendo
del valor de la variable tablaElegida, las columnas llegarán a un determinado número.
Ej: si tablaElegida es un 5, el for entrará en un bucle donde creará 5 celdas,para cada
fila de $i */
/*el contenido de las celdas es el producto de la intersección del número de fila con el nª de columna ^*/
for($i= 0; $i <= 10; $i++){
   echo "<tr>";
   for($y=0; $y <= $tablaElegida ;$y++){
    echo "<td>" . $i * $y . "</td>";
  
   }
   echo "</tr>";
}
?>

</table>

</body>

<style>
    table{
        margin:auto;
        border-collapse: collapse;
    }
    td,th{
        border:black 2px solid;
    }
</style>
</html>

