<?php
session_start();

// Ruta del archivo donde se guardarán los contactos
$archivoContactos = 'contactos.json';

// Función para validar el correo electrónico
function validarEmail($email) {
    return preg_match('/^[a-zA-Z0-9._%+-]+@(gmail\.com|educa\.madrid\.org|outlook\.com)$/', $email);
}

// Cargar contactos desde el archivo al inicio
$contactos = [];
if (file_exists($archivoContactos)) {
    $contactos = json_decode(file_get_contents($archivoContactos), true);
}

// Manejo del envío del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $tipoTelefono = isset($_POST['fijo']) ? 'Fijo' : (isset($_POST['movil']) ? 'Móvil' : '');
    $email = $_POST['email'] ?? '';
    $fechaNacimiento = $_POST['fecha_nacimiento'] ?? '';
    $imagen = $_FILES['imagen'] ?? null;

    $errores = [];

    // Validar los campos
    if (empty($nombre)) {
        $errores['nombre'] = 'El nombre es obligatorio.';
    }
    if (empty($telefono)) {
        $errores['telefono'] = 'El teléfono es obligatorio.';
    }
    if (!validarEmail($email)) {
        $errores['email'] = 'El correo electrónico debe ser válido y terminar en @gmail.com, @educa.madrid.org o @outlook.com.';
    }
    if (empty($fechaNacimiento)) {
        $errores['fecha_nacimiento'] = 'La fecha de nacimiento es obligatoria.';
    }

    // Procesar la imagen si se ha subido
    if ($imagen && $imagen['error'] === UPLOAD_ERR_OK) {
        $rutaImagen = 'uploads/' . basename($imagen['name']);
        move_uploaded_file($imagen['tmp_name'], $rutaImagen);
    } else {
        $rutaImagen = null;
    }

    // Si no hay errores, añadir el contacto
    if (empty($errores)) {
        $contactos[] = [
            'nombre' => $nombre,
            'telefono' => $telefono,
            'tipo_telefono' => $tipoTelefono,
            'email' => $email,
            'fecha_nacimiento' => $fechaNacimiento,
            'imagen' => $rutaImagen
        ];
        file_put_contents($archivoContactos, json_encode($contactos));
        echo '<p>Contacto añadido con éxito.</p>';
    }
}

// Limpiar el formulario
if (isset($_POST['limpiar'])) {
    $nombre = $telefono = $tipoTelefono = $email = $fechaNacimiento = '';
    $errores = [];
}

// Mostrar todos los contactos
if (isset($_POST['ver_contactos'])) {
    echo '<h2>Contactos:</h2>';
    foreach ($contactos as $contacto) {
        echo '<div>';
        echo '<p>Nombre: ' . htmlspecialchars($contacto['nombre']) . '</p>';
        echo '<p>Teléfono: ' . htmlspecialchars($contacto['telefono']) . ' (' . htmlspecialchars($contacto['tipo_telefono']) . ')</p>';
        echo '<p>Email: ' . htmlspecialchars($contacto['email']) . '</p>';
        echo '<p>Fecha de Nacimiento: ' . htmlspecialchars($contacto['fecha_nacimiento']) . '</p>';
        if (!empty($contacto['imagen'])) {
            echo '<img src="' . htmlspecialchars($contacto['imagen']) . '" alt="Imagen" style="width:100px;height:auto;">';
        }
        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uAgenda</title>
    <script>
        function valida(a) {
            if (a == 1) {
                document.getElementById('movil').checked = false;
            } else {
                document.getElementById('fijo').checked = false;
            }
        }
    </script>
</head>
<body>
    <h1>Agenda de Contactos</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($nombre ?? '') ?>">
        <?= isset($errores['nombre']) ? '<span style="color:red;">' . $errores['nombre'] . '</span>' : '' ?><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= htmlspecialchars($telefono ?? '') ?>">
        <?= isset($errores['telefono']) ? '<span style="color:red;">' . $errores['telefono'] . '</span>' : '' ?><br>

        <label>Tipo de Teléfono:</label>
        Fijo:<input type="checkbox" name="fijo" id="fijo" onClick="valida(1);"> <br><br>
        Móvil:<input type="checkbox" name="movil" id="movil" onClick="valida(2);"><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>">
        <?= isset($errores['email']) ? '<span style="color:red;">' . $errores['email'] . '</span>' : '' ?><br>

        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?= htmlspecialchars($fechaNacimiento ?? '') ?>">
        <?= isset($errores['fecha_nacimiento']) ? '<span style="color:red;">' . $errores['fecha_nacimiento'] . '</span>' : '' ?><br>

        <label>Imagen (opcional):</label>
        <input type="file" name="imagen"><br>

        <button type="submit">Añadir Contacto</button>
        <button type="submit" name="limpiar">Limpiar Formulario</button>
        <button type="submit" name="ver_contactos">Ver Contactos</button>
    </form>
</body>
</html>
