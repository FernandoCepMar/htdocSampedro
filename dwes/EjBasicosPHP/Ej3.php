<?php
/*3. Escribir un programa que muestre el horario de clase mediante una tabla. Se deben
aplicar los estilos visuales necesarios para que cada asignatura tenga una apariencia
única distinta del resto.*/

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
        background-color: rgb(<?php echo aleatorio() ?> ,<?php echo aleatorio() ?> , <?php echo aleatorio() ?> );
    }
</style>

<div>
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