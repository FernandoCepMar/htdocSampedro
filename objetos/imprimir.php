<?php
require "producto.php";

echo "<h1>MANERAS DE IMPRIMIR OBJETO PHP</h1>";

$p1 = new Producto();
$p2 = new Producto();
$p3 = new Producto();

// echo $p1::IVA;
// echo $p2::IVA;
// echo $p3::IVA;

echo "<h1>var_dump()</h1>";

echo "<pre>";
var_dump($p1);
echo "</pre>";

echo "<h1>var_export()</h1>";

echo "<pre>";
var_export($p2);
echo "</pre>";

echo "<h1>print_r()</h1>";

echo "<pre>";
print_r($p3);
echo "</pre>";

echo "<h1>foreach</h1>";

class Persona {
    public $name = 'Fernando';
    public $age = 30;
};

$obj = new Persona();
foreach ($obj as $key => $value) {
    echo "$key: $value\n";
};

//No puedo recorrer los atributos
//del objeto producto porque son privados

foreach ($p1 as $atributo => $valor) {
    echo "$atributo: $valor\n";
};




?>