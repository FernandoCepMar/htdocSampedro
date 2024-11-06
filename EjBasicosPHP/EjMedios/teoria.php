<?php

$a = "s";

$b = isset($p);

echo $b;

$tipo = gettype($a);
echo $tipo;
echo "<br>" . "Estas seguro???";

echo "<pre>";
echo print_r($GLOBALS);
echo "</pre>";


/* Todo lo que se mete en un formulario
se envia al servidor, en el method se
especifica get o post  
el action indica a que pagina se va a enviar, su destino

_self se envia a uno mismo
*/







/*get para recibir datos
porst para enviarlos
SI NO SE SABE SI ES GET O POST 
SE USA REQUEST */






/* si la variable o el objeto
lo hago nulo, el reclector de basura
destruira la variable para liberar de
espacio */

/*para destruir una varibale/objecto
en una linea especifica se usa: unset() */

/* cuando el recolector de basura detecta que
una variable esta ocupando espacio pero
no referencia a ninguna variable, la elimina */

// para detectar si es nulo : is_null


?>