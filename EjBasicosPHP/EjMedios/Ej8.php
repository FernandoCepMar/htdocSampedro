<!-- Partiendo de la frase: “Programa siempre tu código como si el tipo que va
 a tener que mantenerlo en el futuro fuera un violento psicópata que sabe dónde vives, 
 (Martin Goldin)”. Utiliza las funciones de array y/o arrays que quieras, para mostrar
  en pantalla:

El número de palabras que contiene la frase.
La cuarta palabra de la frase.
Número de veces que aparece la palabra “que”.
La posición donde aparece la palabra psicópata.
Sustituye la palabra “Programa” por “Comenta”.
Número de palabras que comienzan por “fu”.
Todas las palabras que comienzan por la letra “s”.
El nombre del autor de la frase.
Sugerencia: Las funciones str_word_count(), str_replace(), strst(), 
implode(), rtrim(), trim(), ltrim(), preg_match_all() te servirán para 
el desarrollo de este ejercicio. -->

<!-- TEORIA -->

<!--
str_word_count()
Cuenta el número de palabras dentro de array

Dependiendo del formato devuelve el numero
de palabras de una forma u otra:

format = 0, devuelve un número
format = 1, devuelve un array con las palabras,
como un split en java.
format = 2, devuelve un array asociativo donde la
key es la posicion de la palabra dentro de la
frase(pos del primer caracter) y el valor es la palabra.

palabras se consideran aquellas
solo con caracteres alfabeticos, abecedario,
de manera que los numeros no cuentan como 
palabra por lo que:

fri3nd se consideran dos palabras:
fri
end
porque hay un numero 3 en medio

Para que no suceda esta, hay un tecer parámetro
en el que se incluyen caracteres no alfabeticos
para que sí se consideren palabras.

print_r(str_word_count($str, 1, '123456789'));
De esta manera los numeros no cortan las palabras

Tambein se puede escribir así:

print_r(str_word_count($str, 1, '1..9'));
print_r(str_word_count($str, 1, 'áéíóúüñ'));

FUNCION:-->

<?php

$array = "one two three four";

echo trim_text($array, 3);

?>

<?php

function trim_text($text, $count){
//En la funcion introduces el texto que se quiere recortar con ...
// y en count el numero de palabras visibles antes de ...
$text = str_replace("  ", " ", $text);
/*se sustituye los posibles espacios dobles por un solo espacio
si hay 3 espacios seguidos, esto no lo detecta, para que se 
detectara habría que usar preg_replace la cual es como un STR_REPLACE
pero pudiendo usar expresiones regulares \\s+ para espacios multiples.
*/
$array = explode(" ", $text);
print_r($array);
echo "<br>";
$vacio ="";
//explode es como el split en java
for ( $wordCounter = 0; $wordCounter <= $count; $wordCounter++ ){
  //se recorre hasta el numero de palabras introducido
$vacio .= $array[$wordCounter] . " ";
//se almacena en un string vacio cada palabra del array que surge tras
//el explode
if(($wordCounter == $count -1)) {
  // -1 porque el array empieza en 0
   $vacio = trim($vacio);
   $vacio .= "..."; 
   //si la palabra esta en la ultima posicion permitida
   //se deja de recorren el array de la frase y se pone un ...
   return $vacio;
  }
}
}

// if ( $wordCounter < $count ){ 
//   $vacio .= " "; 
//Si la posicion de la palabra es menor al numero de palabras introducido
//se concatena un espacio vacío para que las palabras no estén juntas

?>

<!-- returns:

one two three...

EXPLODE:
divide un string en varios string en formato array

explode(separador,string,limit)

str_replace()

SIRVE PARA STRINGS Y PARA ARRAYS

es como el .replace() de java, en el cual
todas las apariciones del primer parametro en el string
se reemplazan por el segundo paramatero.
Si la regla de reemplazo necesita un patron especifico 
como una expresion regular, se usa preg_replace().

str_replace(loQueSeVaASustituir,porLoQueSeSustituye,elString)

La funcion se debe igualar a un string o un array con el
resultado sustituido.

Si se quiere reemplazar un elemento en un array:

$array = [1,2,3,4];

$nuevo = str_replace(1,7,$array);

//resultado : [7,2,3,4]

Si se quiere reemplazar un substring en un string:

$string = 'hollame llamo antonio llunior "

$nuevo = str_replace('ll','VV',$string);

//hoVVame VVamo antonio VVunior 

Si se quiere reemplazar varios elementos por uno solo:

$array = [1,2,3,4,5,6,7];

$nuevo = str_replace([1,2,3],7,$array);

//resultado [7,7,7,4,5,6,7]




hay que darle privilegios de escritura al usuario virtual de xampp
en linux, usuarioAchape,al mover el archivo generado por el submit
del directorio temporal al directorio 
-->



















