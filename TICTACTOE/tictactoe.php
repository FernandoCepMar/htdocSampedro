<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tictactoe.css">
</head>
<body>
<form id="form" action="" method="get">
    <div  class="tablero">
<!-- php solo funciona con name, no con id -->

   <input type="button" value="1" name="b1">
   <input type="button" value="" name="2">
   <input type="button" value="" name="3">

   <input type="button" value="" name="4">
   <input type="button" value="" name="5">
   <input type="button" value="" name="6">

   <input type="button" value="" name="7">
   <input type="button" value="" name="8">
   <input type="button" value="" name="9">

</div>

<input type="submit" name="submit" value="enviar">

<form>

<?php


    if(isset($_GET['submit'])){
        if(isset($_GET['b1'])){
            print_r($_GET['b1']);
        }
    }else{
        echo "hola";
    }

?>
</body>
</html>