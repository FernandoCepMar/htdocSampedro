<?php
// Obtener los valores enviados desde el formulario
$colorFondo = isset($_POST['color']) ? $_POST['color'] : '#ffffff';
$tamanoFuente = isset($_POST['tamano']) ? $_POST['tamano'] . 'px' : '16px';

// Especificar el tipo de contenido como CSS
header("Content-type: text/css");

echo "
body {
    background-color: $colorFondo;
    font-size: $tamanoFuente;
}
";
?>
