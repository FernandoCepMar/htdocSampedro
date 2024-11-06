<?php






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="2.php" method="get">
       Nombre: <input type="text" name="nombre">
        <!-- al servidor le llegara una variable con el nombre "nombre" -->
        <input type="submit">
        GRADO DE SATISFACCION;<br>
        BIEN<input type = "radio" name="satisfaccion" value="bien">
        MAL<input type = "radio" name="satisfaccion" value="mal">
        <!-- llamara a 2.php -->

</form>


<!-- si se envia las cosas con get se hace por la url, pero
la url tiene omo maximo 124 caracteres -->


</body>
</html>