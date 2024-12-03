<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uRelatos</title>
	<link rel="stylesheet" href="./css/main.css">
	<script src="./js/main.js"></script> 
</head>
<body>
<?php
	function formateaYAML() {
		$yaml  = "---\n";
		$yaml .= "etiquetas:\n";
		// Cogemos las etiquetas y las introducimos en el yaml
		$etiquetas = explode(',',$_POST['etiquetas']);
		foreach ($etiquetas as $etiqueta) {
			$yaml .= "  - " . $etiqueta . "\n";
		}
		$yaml .= "relato: |\n";
		$yaml .= $_POST['relato'];
		return ($yaml);
	}
	// Si se accede sin iniciar sesión devolvemos al usuario a la página de login
	if(!isset($_SESSION['nombre'])) {
		header('location:index.php');
	}
	// Si se pulsa el botón de aceptar las cookies
	if((isset($_POST['cookies'])) || (isset($_COOKIE['cookies']))) {
		// Creamos la cookie, pero no tendrá efecto hasta la próxima carga de página
		// Si ya existía, alargamos su periodo de expiración
		setcookie('cookies',true,time()+(3600*24));
		// Creamos una variable para esta ejecución
		$cookies = false;
	}
	else {
		$cookies = true;
	}
	
	// Si se pulsa el botón enviar guardamos el contenido en el fichero
	if (isset($_POST['enviar'])) {
		$ruta = './relatos/'.$_SESSION['nombre'].'.txt';
		$relato = fopen($ruta,'w');
		// formateamos el relato como YAML
		$miyaml = formateaYAML();
		fwrite($relato,$miyaml);
	}
?>
    <!-- Barra de título -->
    <div class="header">
        <h1>uRelatos</h1>
        <a href="" class="login-btn">Logout</a>
    </div>

    <!-- Menú lateral -->
    <div class="sidebar">
        <a href="#">Relatos</a>
        <a href="#">Estadísticas</a>
    </div>

    <!-- Contenedor principal -->
	<form target="" method="post">
		<div class="container">
			<!-- Contenido principal -->
			<div class="main-content">
				<?php
					if ($relato) {
						echo "Gracias por participar. Mucha suerte";
					}
					else { ?>
				<h2>Introduce tu relato...</h2>
				<p>
					<textarea id="urelato" rows="10" cols="50" onKeyPress="contarPalabras()" name="relato"></textarea>
				</p>
				<p>
					Palabras restantes:<span id="palabras"></span>
				</p>
				<p>
					Etiquetas (separadas por coma): <input type="text" name="etiquetas" />
				</p>
				<p>
					<input type="submit" class="btn" name="enviar" value="Enviar">
				</p>
			<?php } ?>
			</div>	
		</div>
		<!-- Barra de cookies -->
		<!-- Cuando el usuario acepte las "cookies" ocultaremos mediante estilos el aviso con: style="display: none;" -->
		<div id="cookie-banner" class="cookie-banner" <?php if (!$cookies) echo ('style="display: none;"'); ?>>
			<p>Este sitio web utiliza cookies. Pulsa el botón "Aceptar" para aceptar nuestras condiciones de uso.</p>
			<input type="submit" class="accept-cookie-btn" name="cookies" value="Aceptar" />
		</div>
	</form>
</body>
</html>
