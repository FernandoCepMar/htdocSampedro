<?php
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Usuarios predefinidos
    $valid_users = [
        'admin' => 'admin',
        'usuario' => 'usuaRIO',
    ];

    // Validar acceso
    if (array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['last_access'] = date('Y-m-d H:i:s');
        header('Location: main.php'); // Redirigir a la página principal
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
    <title>Acceso - Tienda Online</title>
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
    <p><a href="registro.php">¿No tienes cuenta? Regístrate aquí</a></p>
</body>
</html>
