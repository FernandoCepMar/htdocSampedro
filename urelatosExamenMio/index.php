


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/index.css">
</head>
<body>
<script>
        let pantallaError = document.getElementById('mensajes');
pantallaError.textContent = " <?php echo $error ; ?>" ;
</script>
	
	<div class="container">
		<form action = "" method="post" >
			<h1>uRelatos Login</h1>
			<div class="form-group">
			<span id="mensajes" style="background-color: LightCoral;">
            <?php if(isset($error)) echo $error; ?>

			</span>
			</div>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" 
                name="nombre"
value ="<?php echo mantenerNombre();?>"
                 required>
			</div>
			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password" class="form-control" 
                name="passwd" 
                required>
			</div>
			<div class="form-group"><input type="submit" class="btn"
            name="submit"
            value="Entrar"></div>
			<br>
			<div class="form-group" style="text-align:right;"><a href="" id="registro">No estoy registrado</a></div>
		</form>
	</div>

	<?php


    
	function obtenerDatos(){
		$fichero = "usr/usuarios.txt";
		$datos = [];
        if(file_exists($fichero)){
    $file = fopen($fichero,"r");
		while(($linea = fgets($file)) !== false){
		$dato = explode(':',trim($linea));
        $datos[] = $dato;
		}
        // echo "<pre>";
        // print_r($datos) ;
        // echo "</pre>";
        return $datos;
        fclose($file);
    }
	}

    $datos = obtenerDatos();
    if(isset($_POST['submit'])){
        if(isset($_POST['nombre']) && isset($_POST['passwd'])){
            $retorno = comprobarDatos($datos);
            if(is_string($retorno)){
               echo $retorno;
            }elseif($retorno === true){
               guardarSesion();
            }
        }
    }



    // function value($name){
    //     if(isset($_POST['submit'])){
    //         if(isset($_POST[$name])){
    //             return $_POST[$name];
    //         }else{
    //             return "";
    //         }
    // }
    // }


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";


    function comprobarDatos($datos){
        $error = "";
                foreach($datos as $usuario => $dato){
                    $usuarioExiste = false;
                    $pswd = false;
                    if($dato[0] == $_POST['nombre']){
                        $usuarioExiste = true;
                    }
                    if($dato[1] == $_POST['passwd']){
                        $pswd= true;
                    }
                }
                if(!$usuarioExiste){
                    $error .= "El usuario introducido no existe\n";
                }
                if(!$pswd){
                    $error .= "La contraseña no existe";
                }
                if($usuarioExiste && $pswd){
                    return true;
                }else{
                    $_POST[] = $error;
                    return $error;
                }

            }

function mantenerNombre() {
    if(isset($_POST['submit']) && isset($_POST['nombre'])){
$datos = obtenerDatos();
foreach($datos as $usuario => $dato){
    $pswd = false;
    if($dato[1] == $_POST['passwd']){
        echo
        $pswd= true;
       
    }
}

if(!$pswd){
    return $_POST['nombre'];
}else{
    return "hola";
}
}
}


            ?>

</body>
</html>










