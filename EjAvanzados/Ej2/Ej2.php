<!-- Crear un programa que, implementando distintos estilos que
  provienen de un archivo externo CSS, permita elegir mediante
dos desplegables el color de fondo de la página y el color de 
la fuente. Se incluirán también dos casillas de selección
donde indicar la decoración, negrita y/o cursiva, de la tipografía. 
Al enviar el formulario se cargará la misma página,
aplicando los cambios de estilo. Las opciones seleccionadas por
 el usuario deben mantenerse en el formulario tras la
carga de la página. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Los issets sirven para que cuando se entra en el formulario
la primera vez, y no se ha dado antes al boton enviar,
no aparezcan errores de undefined key debido a que todavia
no se ha generado el array post -->
<?php
    if(isset($_POST["fondo"])){
        $fondo = $_POST["fondo"];
    }else{
        $fondo ="";
    }
    if(isset($_POST["fuente"])){
        $fuente = $_POST["fuente"];
    }else{
        $fuente="";
    }

    // En el caso de las checkbox lo anterior no se hace
    // porque si no existe el valor de un checkbox y se iguala
    // a una variable vacia,luego al comprobar su existencia para marcar o 
    // no saldria que siempre existe.

    /*una alternatica seria hacer el isset aqui pero si existe igualar
    una variable a true y luego en el options hacer check en funcion de ese
    boolean en vez de su existencia */
   
    print_r($_POST);
    include "estilos.html";

?>
<body>
    <form action="" method="POST">
        FONDO:
        <select name="fondo" id="fondo">
            <option value="yellow" <?php echo ($fondo == "yellow") ? "selected" : "" ;?> >amarillo</option>
            <option value="red" <?php echo ($fondo == "red") ? "selected" : "" ;?>>rojo</option>
            <option value="green" <?php echo ($fondo == "green") ? "selected" : "" ;?>>verde</option>
        </select>
        FUENTE:
        <select name="fuente" id="fuente">
            <option value="yellow" <?php echo ($fuente == "yellow") ? "selected" : "" ;?> >amarillo</option>
            <option value="red" <?php echo ($fuente == "red") ? "selected" : "" ;?>>rojo</option>
            <option value="green" <?php echo ($fuente == "green") ? "selected" : "" ;?>>verde</option>
        </select>

        <label for="negrita">negrita</label>
        <input type="checkbox" name="negrita" value="bold" <?= isset($_POST["negrita"]) ? 'checked' : '' ?>>

        <label for="cursiva">cursiva</label>
        <input type="checkbox" name="cursiva" value="italic" <?= isset($_POST["cursiva"]) ? 'checked' : '' ?>>

        <input type="submit" name="submit"/>
    </form>

    <?php


    ?>
</body>

</html>


