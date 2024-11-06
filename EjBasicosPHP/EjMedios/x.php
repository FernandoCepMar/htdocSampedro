<?php
session_start(); // Iniciar la sesión para almacenar intentos

function aleatorio($numIntro) {
    // Generar un número aleatorio entre 1 y 10
    $numAle = rand(1, 10);
    // Comprobar si el número introducido es igual al número aleatorio
    return $numAle === $numIntro ? $numAle : false;
}

// Inicializar el contador de intentos en la sesión
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

// Comprobar si se ha enviado un número
if (isset($_GET["numIntro"])) {
    $numIntro = (int)$_GET["numIntro"];
    $_SESSION['intentos']++;

    // Llamar a la función aleatorio
    $resultado = aleatorio($numIntro);

    // Comprobar el resultado
    if ($resultado) {
        echo "<p class='acierto' style='color: green;'>¡Felicidades, has acertado! El número era " . $resultado . ".</p>";
        session_destroy(); // Reiniciar la sesión
    } else {
        if ($_SESSION['intentos'] < 3) {
            echo "<p class='error' style='color: red;'>¡Oh, mejor suerte la próxima vez! Tienes " . (3 - $_SESSION['intentos']) . " intentos restantes.</p>";
        } else {
            echo "<p class='error' style='color: red;'>¡Oh, mejor suerte la próxima vez! El número era " . $resultado . ".</p>";
            session_destroy(); // Reiniciar la sesión
        }
    }
}
?>
