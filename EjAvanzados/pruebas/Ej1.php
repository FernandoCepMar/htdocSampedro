<!-- Mejora el ejercicio de conversión de divisas
propuesto en Ejercicios básicos mediante una página
que muestre 4 divisas diferentes en dos desplegables
y un campo numérico. Será obligatorio para enviar el
formulario que el campo numérico tenga algún valor
numérico. La página del resultado muestra la conversión
del campo numérico de la primera divisa a la segunda.
Se deben emplear los controles HTML adecuados en cada
caso, pudiendo validar la entrada mediante código
JavaScript, que deberá ir en un archivo externo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="validacion.js"></script>
<body>
  <?php
  include "divisas.php";

  if(isset($_GET["submit"]) && !empty($_GET["cant"])){
    $cantidad = $_GET["cant"];
  ?>
    <script>
    let cantidad = <?php echo $cantidad ; ?>;
    if(validacion(cantidad)){

        <?php
        conversor($_GET["divisa1"],$_GET["cant"],$_GET["divisa2"]);
        ?>
    }else{
        alert("ENTRADA INVALIDA");
    }

    </script>

<?php }else ?>

    <form action="" method="get">
        DIVISA1:
        <select name="divisa1">
            <option value="Dolar">DOLAR</option>
            <option value="Euro">EURO</option>
            <option value="Yen">YEN</option>
        </select>
        <input type="number" min="0" name="cant" step="0.01" id="cant">
DIVISA2:
        <select name="divisa2">
            <option value="Dolar">DOLAR</option>
            <option value="Euro">EURO</option>
            <option value="Yen">YEN</option>
        </select>
        <input type="submit" name="submit"  value="Calcular"/>
    </form>
</body>
</html>