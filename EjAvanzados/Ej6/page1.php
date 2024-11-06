<?php
session_start();

$message = '';

// Validar el inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Comprobar credenciales
    if ($username === 'profe' && $password === '1234') {
        $_SESSION['loggedin'] = true; // Iniciar sesión
        header('Location: page2.php'); // Redirigir a la página de bienvenida
        exit;
    } else {
        $message = 'Credenciales incorrectas. Inténtalo de nuevo.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php if ($message) : ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
