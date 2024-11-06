<?php
/*3. Escribir un programa que muestre el horario de clase mediante una tabla. Se deben
aplicar los estilos visuales necesarios para que cada asignatura tenga una apariencia
única distinta del resto.*/

/* al hacer esto en css, aplica a todas las celdas, no a cada una de manera individual por lo que todas
tendrían el mismo color:
background-color: rgb(<?php echo aleatorio() ?> ,<?php echo aleatorio() ?> , <?php echo aleatorio() ?> );*/

function aleatorio(){
    return rand(0,255);
}

?>

<style>
    table{
        text-align: center;
        
        border-collapse: collapse;
       
    }
    td,th{
        border: rgb(<?php echo aleatorio() ?> ,<?php echo aleatorio() ?> , <?php echo aleatorio() ?> ) solid 4px;
       
    }
   
</style>
<!-- Lo de abajo se podría hacer almacenando las asignaturas en un array $asignaturas
y creando dinamicamente los td similar al ejercicio 6 -->
<!-- algo del estilo:

$asig = ["Ingles","Mates","Judo"];
for($i= 0; $i <= 4; $i++){
   echo "<tr>";
   for($y=0; $y <= 3 ;$y++){
    echo "<td style='background-color: rgb('. aleatorio().')>" . $asig[$i]  . "</td>";
  
   }
   echo "</tr>";
} -->

<div>
    <div align="middle">
    <table>
        <th colspan = "3" style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">HORARIO</th>
        <tr>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Inglés</td>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Conocimiento del medio</td>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Plastica</td>
        </tr>
        <tr>
            <td colspan="3" style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">RECREO</td>
        </tr>
        <tr>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Matematicas</td>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Lengua</td>
            <td style="background-color: rgb(<?php echo aleatorio() ; ?>, <?php echo aleatorio(); ?>, <?php echo  aleatorio(); ?>);">Historia</td>
        </tr>
    </table>
</div>