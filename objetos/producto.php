<?php

class Producto {
    public static $stock = 0;
    private static $unidades = 0;
    private $codigo;
    private $nombre;
    private $nombre_corto;
    private $pvp;
    public const IVA = 21;
    /*No se puede declarar una constante
    sin asignarle un valor, es decir
    no se puede hacer const IVA;*/
    /*
    IVA es una constante de la clase Producto
    de manera que todos los objetos instanciados 
    de la clase tendrán el mismo valor de IVA,
    además este no se podrá cambiar con un set 
    porque es constante
    */


    // public function __construct($codigo,$nombre,$pvp,$nombre_corto){
    //     __construct($codigo,$nombre,$pvp);
    //     $this->nombre_corto = $nombre_corto;
    //  }

    // public function __construct($codigo,$nombre,$pvp){
    //     __construct($codigo,$nombre);
    //     $this->pvp = $pvp;
    // }

    // public function __construct($codigo,$nombre){
    //     $this->codigo = $codigo;
    //     $this->nombre = $nombre;
    // self::$stock++;
    // }

    public function muestra(){
        print "<p>" . $this -> codigo . "</p>";
    }
    public function setPVP($pvp){
         $this->pvp = $pvp;
    }

    public function setNombre($nombre){
         $this->nombre = $nombre;
    }
    public function setCodigo($codigo){
         $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public static function muestraStock(){
        echo "<p> Stock: " . self::$stock . "</p>";
    }
    // public function setIVA($iva){
    //     $this->IVA = $iva
    // }

    public function __toString(){
        $cadena = 
        "codigo : $this->codigo\n,
         nombre: $this->nombre\n
         ";
         return $cadena;
    }
    public function __destruct(){
        self::$stock--;
        echo "producto";
    }

    public function __clone(){
        self::$stock++;
        $this->codigo++;
    }

}



/*
si la instancia de una clase, un objeto,
se quiere eliminar, se iguala a null para que
el recolector de basura de php elimine el objeto */


?>