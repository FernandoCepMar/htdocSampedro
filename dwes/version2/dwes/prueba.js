/*let answer = prompt("esto se ve?")
document.write("Si se ve " + answer)*/

/* document.write inserta contenido directamente en el documento HTML.
 Si se llama después de que el documento se ha cargado, puede sobrescribir todo el contenido de la página.*/


prompt("Introduce algo")
//puedes hacer un prompt sin necesidad de almacenarlo en una variable
document.write("<h1>Gil</h1>")


/*console.log imprime el valor en la consola, y este puede usarse*/
/*document.write muestra el contenido en el html*/

/*document.write no tiene valor de retorno por lo que si 
se intenta almacenar en una variable o imprimir sal undefined*/

/*si se ingresa una cadena como paramtro con etiquetas de html,
se insertaran en el html adoptando esas etiquetas*/
/* dependiendo de donde esté la etiqueta script en el html,
se insertara el parametro del document.write  en la posicion que se encuentre
la etiqueta script */

/*Sobrescritura: Si document.write se llama después de que el documento ha terminado de cargarse 
(por ejemplo, en un evento de clic), sobrescribirá todo el contenido de la página, eliminando lo que ya estaba ahí.*/

/* Detalles sobre document.write:
Durante la carga del documento:

Si document.write se utiliza mientras el documento HTML se está cargando (por ejemplo, en el <head> o en el <body> 
antes de que se haya completado la carga), funcionará como se espera y añadirá contenido al documento sin problemas.
Después de la carga del documento:

Si llamas a document.write después de que el documento HTML ha terminado de cargarse (por ejemplo, en respuesta a 
un evento, como un clic en un botón), document.write sobrescribirá todo el contenido del documento HTML actual.
 Esto significa que eliminará cualquier cosa que ya se haya renderizado en la página.
*/

