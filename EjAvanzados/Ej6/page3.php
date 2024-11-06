<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: page1.php'); // Redirigir a la página de inicio si no está autenticado
    exit;
}

// Manejar el cierre de sesión
if (isset($_POST['logout'])) {
    session_destroy(); // Destruir la sesión
    header('Location: page1.php'); // Redirigir a la página de inicio
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Sólo accesible mediante sesión</h1>
    <p>Esta es una página protegida que solo se puede ver si has iniciado sesión.</p>
    <form method="POST" action="">
        <button type="submit" name="logout">Cerrar Sesión</button>
    </form>
</body>
</html>
