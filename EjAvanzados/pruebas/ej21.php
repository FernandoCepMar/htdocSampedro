<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de estilos</title>
    <link rel="stylesheet" href="estilos.php">
</head>
<body>
    <form action="" method="POST">
        <label for="color">Color de fondo:</label>
        <input type="color" name="color" id="color">
        
        <label for="tamano">Tamaño de fuente:</label>
        <input type="number" name="tamano" id="tamano" min="10" max="100">
        
        <button type="submit">Aplicar estilos</button>
    </form>
</body>
</html>
