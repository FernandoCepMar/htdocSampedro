<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirigir a la página de acceso si no está autenticado
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Tienda Online</title>
</head>
<body>
    <h1>Bienvenido a la Tienda Online, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Último acceso: <?php echo $_SESSION['last_access']; ?></p>
    <p>Esta es la página principal donde puedes ver los productos.</p>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>
</html>
