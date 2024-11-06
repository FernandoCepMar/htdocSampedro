<!-- Crear un array asociativo llamado “CajonDeSastre” donde 
se almacenen un número indeterminado de elementos de diferentes 
tipos (al menos 10). A continuación, saca de uno en uno los elementos y muéstralos por pantalla.

Bonus: Crea las funciones necesarias para implementar un mecanismo 
de pila y uno de cola mediante arrays asociativos. -->

<?php

class objeto{
    public string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

}
$cajonDeSastre = ["array" =>[1,5,6],"integer"=>35,"float"=>9.08,"string"=>"hola",
"booleanoTrue"=>true,"nulo"=>null,new objeto("Juan"),"Key con valor vacío" =>"",
"booleanoFalse"=>false,"arrayAsociativo"=>[['a'=>1],['b'=>2],['c'=>3]]];

echo "<pre>";
echo print_r($cajonDeSastre);
echo "</pre>";
?>