

<?php

require_once "producto.php";
//el fichero se incluye en main.php una vez
//con require si el fichero no existe, da error, es obligatorio

$p1 = new Producto();
$p2 = new Producto();
$p3 = new Producto();
echo $p1::IVA;
echo $p2::IVA;
echo $p3::IVA;

echo "<pre>";
print_r($p1);
echo "</pre>";

echo "<pre>";
print_r($p2);
echo "</pre>";

echo "<pre>";
print_r($p3);
echo "</pre>";


echo "<br>";
echo $p::$stock;

// echo "<br>";
//  $p->setPVP(45);
// echo $p->pvp;
// /*como pvp es publico,
// no hace falta usar un get */
// echo "<br>";

// $p->setCodigo(123);
// echo $p->getCodigo();

// echo "<br>";

// echo Producto::muestraStock();

// echo "<br>";
// echo Producto::$stock;

// //los constructores siempre son publicos
// /*los atributos de una clase se declaran con $
// pero a la hora de acceder a los atributos, no 
// se pone dolar: $p->pvp; */

// /*Se pueden imprimir objetos al igual
// con un print_r*/

// echo "<pre>";
// print_r($p);
// echo "</pre>";



?>



