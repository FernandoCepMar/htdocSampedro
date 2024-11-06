<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: page1.php'); // Redirigir a la página de inicio si no está autenticado
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
</head>
<body>
    <h1>Bienvenido, Profe!</h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="page3.php">Acceder a la página protegida</a></p>
</body>
</html>
