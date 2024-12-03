<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content"width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/index.css">
</head>
<body>

<?php
	if (isset($_POST['entrar'])) {
		$fusuarios = fopen('./usr/usuarios.txt','r');
		while (!feof($fusuarios)) {
			$linea = fgets ($fusuarios);
			$usuario = explode(':',$linea);
			if ($_POST['nombre'] == $usuario[0]) {
				if ($_POST['password'] == trim($usuario[1])) {
					$_SESSION['nombre'] = $_POST['nombre'];
					header('location:main.php');
				}
				else {
					$error = "La contraseña es incorrecta...";
				}
			}
		}
		if(!isset($error)) $error = "El usuario no existe...";
	}
	else {
		session_destroy();
		session_start();
	}
?>

	<div class="container">
		<form action="" method="post">
			<h1>uRelatos Login</h1>
			<div class="form-group">
			<span id="mensajes" style="background-color: LightCoral;">
				<?php
					if(isset($error)) echo $error;
				?>
				<!-- ----------------------------------------------------------- -->
				<!-- Aquí se introducirán los mensajes de error que se produzcan -->
				<!-- ----------------------------------------------------------- -->
			</span>
			</div>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" 
				value=""

				required />
			</div>
			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group"><input type="submit" class="btn" name="entrar" value="Entrar"></div>
			<br>
			<div class="form-group" style="text-align:right;"><a href="" id="registro">No estoy registrado</a></div>
		</form>
	</div>
</body>
</html>