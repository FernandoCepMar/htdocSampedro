<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personalizar Estilos</title>
    <style>
        /* Estilos predeterminados */
        body {
            background-color: <?= isset($_POST['color_fondo']) ? $_POST['color_fondo'] : '#ffffff' ?>;
            color: <?= isset($_POST['color_fuente']) ? $_POST['color_fuente'] : '#000000' ?>;
            font-weight: <?= isset($_POST['negrita']) ? 'bold' : 'normal' ?>;
            font-style: <?= isset($_POST['cursiva']) ? 'italic' : 'normal' ?>;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <!-- Selección del color de fondo -->
        <label for="color_fondo">Color de fondo:</label>
        <select name="color_fondo" id="color_fondo">
            <option value="#ffffff" <?= isset($_POST['color_fondo']) && $_POST['color_fondo'] == '#ffffff' ? 'selected' : '' ?>>Blanco</option>
            <option value="#f0f0f0" <?= isset($_POST['color_fondo']) && $_POST['color_fondo'] == '#f0f0f0' ? 'selected' : '' ?>>Gris claro</option>
            <option value="#000000" <?= isset($_POST['color_fondo']) && $_POST['color_fondo'] == '#000000' ? 'selected' : '' ?>>Negro</option>
        </select>

        <!-- Selección del color de la fuente -->
        <label for="color_fuente">Color de la fuente:</label>
        <select name="color_fuente" id="color_fuente">
            <option value="#000000" <?= isset($_POST['color_fuente']) && $_POST['color_fuente'] == '#000000' ? 'selected' : '' ?>>Negro</option>
            <option value="#ff0000" <?= isset($_POST['color_fuente']) && $_POST['color_fuente'] == '#ff0000' ? 'selected' : '' ?>>Rojo</option>
            <option value="#0000ff" <?= isset($_POST['color_fuente']) && $_POST['color_fuente'] == '#0000ff' ? 'selected' : '' ?>>Azul</option>
        </select>

        <!-- Casillas de selección para decoraciones -->
        <label for="negrita">Negrita</label>
        <input type="checkbox" name="negrita" id="negrita" <?= isset($_POST['negrita']) ? 'checked' : '' ?>>

        <label for="cursiva">Cursiva</label>
        <input type="checkbox" name="cursiva" id="cursiva" <?= isset($_POST['cursiva']) ? 'checked' : '' ?>>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Aplicar estilos</button>
    </form>
</body>
</html>
