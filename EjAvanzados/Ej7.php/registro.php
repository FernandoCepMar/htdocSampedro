<?php
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validar datos del registro
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $message = 'Todos los campos son obligatorios.';
    } elseif ($password !== $confirm_password) {
        $message = 'Las contraseñas no coinciden.';
    } else {
        // Guardar el nuevo usuario en un archivo
        $users_file = 'users.txt';
        $existing_users = file_exists($users_file) ? file($users_file, FILE_IGNORE_NEW_LINES) : [];

        // Comprobar si el usuario ya existe
        if (in_array($username, $existing_users)) {
            $message = 'El nombre de usuario ya está en uso.';
        } else {
            // Registrar el nuevo usuario
            file_put_contents($users_file, $username . PHP_EOL, FILE_APPEND);
            header('Location: login.php'); // Redirigir al login
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Tienda Online</title>
</head>
<body>
    <h1>Registrarse</h1>
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
        <label for="confirm_password">Confirmar contraseña:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <p><a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a></p>
</body>
</html>
