<?php

session_start();


 function aleatorio($introducido) {
    
    if (isset($_SESSION['intentos'])) {
        $contador = $_SESSION['intentos'];
    } else {
        $contador = 0;
    }
    
    if (isset($_SESSION['numero_aleatorio'])) {
        $num = $_SESSION['numero_aleatorio'];
    } else {
        $num = rand(1, 10);
    }

    if (!isset($_SESSION['numero_aleatorio'])) {
        $_SESSION['numero_aleatorio'] = $num;
    }

    if ($contador < 3) {
        if ($num == $introducido) {
            return true;
        } else {
            $_SESSION['intentos'] = ++$contador;
            return false;
        }
    }
    return false;
}

// Comprobar si se ha enviado el número
if (isset($_GET["num"])) {
    $resultado = aleatorio((int)$_GET["num"]);
    
    if ($resultado) {
        echo "<p class='acierto'>¡Felicidades, has acertado!</p>";
        session_destroy(); // Reiniciar el juego
    } elseif ($_SESSION['intentos'] >= 3) {
        echo "<p class='error'>¡Oh, mejor suerte la próxima vez! El número era " . $_SESSION['numero_aleatorio'] . ".</p>";
        session_destroy(); // Reiniciar el juego
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
</head>
<body>
    <form action="" method="get">
        Introduce el número:
        <input type="number" name="num" min="1" max="10" required>
        <input type="submit">
    </form>

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
</body>
</html>
