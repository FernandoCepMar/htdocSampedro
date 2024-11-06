<?php

session_start(); // Iniciar la sesión para almacenar intentos

function aleatorio($numIntro){
    $contador = 0;
    $numAle = rand(1,10);
    while($contador < 3){
     if($numAle == $numIntro){
       return true;
     }else{
       $contador++;
     }
  }
  return false;
 }

 // Inicializar el contador de intentos en la sesión
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

 $resultado = aleatorio((int)$_GET["numIntro"]);

        if($resultado){
            echo "<p class='acierto'>¡Felicidades,has acertado!</p>";
            }else{
            echo "<p class='error'>¡Oh,mejor suerte la próxima vez! el numero era " . $_GET["numIntro"] . "</p>";
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
    
</body>
<style>
        .acierto {
            color: white;
            background-color: green;
            padding: 10px;
        }
        .error {
            color: white;
            background-color: red;
            padding: 10px;
        }
    </style>
</html>