<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Introduce el nombre de usuario:
        <input type="text" name="nombre" />
        Introduce la contraseña:
        <input type="password" name="passwd" />
        <input type="submit" name="enviar" value="enviar"/>
    </form>

</body>
<?php

print_r($_POST);
print_r($_POST["enviar"])

function login($nombre,$passwd){

    if($nombre == "Fernando" && $passwd == "z"){
        
        // header("Location:bienvenida.html");

        if(!isset($_COOKIE["visita"])){
            setcookie("visita","1",time()+3600);
            print_r($_COOKIE);
        }
        
    }else{
        // header("location:error.html");
    }

}

login($_POST["nombre"],$_POST["passwd"]);

?>
<style>
    input {
        display: block;
        margin: 1%;
    }
</style>

</html>