<html>
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

<style>
    p{
        background-color: rgb(49, 106, 106);
        width:20%;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: red;
        text-align: center;
        padding: 3px;
    }
</style>
</html>