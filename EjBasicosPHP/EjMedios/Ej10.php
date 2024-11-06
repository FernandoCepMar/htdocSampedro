<!-- Crear un juego en el que el usuario deba adivinar un número entre el 1 y el 10 en 3 intentos.
 Si el usuario acierta dentro de los turnos de juego, se imprimirá por pantalla: “¡Felicidades, has acertado” 
en color verde. Si por el contrario se agotan los turnos, mostrará el texto: “¡Oh, mejor suerte
 la próxima vez!” en color rojo, junto a la solución. -->

<?php

 function aleatorio($introducido){
   $contador = 0;
   $num = rand(1,10);
   while($contador < 3){
    $introducido = 7;
    if($num == $introducido){
      return true;
    }else{
      $contador++;
    }
 }
 return false;
}

aleatorio($_GET["num"]);

 if(aleatorio()){
  echo "<p class='acierto'>¡Felicidades,has acertado!</p>";
   }else{
     echo "<p class='error'>¡Oh,mejor suerte la próxima vez!</p>";
   }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
<form action="10.php" method="get">
  Introduce el número:
  <input type="number" name="num" max= "1" max = "10" required>
  <input type="submit">
</form>
   
 </body>

 <style>
  .acierto{
   background-color: green;
  }
  .error{
   background-color: red;
  }
  </style>
 </html>