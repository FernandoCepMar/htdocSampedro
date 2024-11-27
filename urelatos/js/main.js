function contarPalabras() {

            // Cogemos el texto
            let texto = document.getElementById("urelato").value;

            // Inicia contador
            let numPalabras = 0;

            // Contamos palabras
            for (let i = 0; i < texto.length; i++) {
                let caracterActual = texto[i];

                // Comprobamos si hay espacio entre letras
                if (caracterActual == " ") {
                    numPalabras += 1;
                }
            }

            numPalabras += 1;

            // Muestra palabras restantes
            document.getElementById("palabras").innerHTML = 100-numPalabras;
        }