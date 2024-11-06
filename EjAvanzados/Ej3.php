<!-- Escribr un programa que permita al usuario introducir las temperaturas 
máximas y mínimas de las ciudades de Madrid,
Barcelona, Sevilla y Bilbao (por ese orden) para cada uno de los meses
 del año. Se creará un array que sirva para
rellenar dinámicamente con valores por defecto los elementos del formulario. 
Las temperaturas pueden tener valores
decimales. Al enviar el formulario, el programa mostrará una tabla con los nombres
 de las ciudades ordenadas
alfabéticamente y los datos correspondientes a la temperatura máxima, mínima y 
temperatura media del año en cada ciudad. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display: flex;
        flex-wrap: wrap;
        border: solid 1px red;
        width: fit-content;
        padding: 0;
        justify-content: center;

    }

    section {
        padding: 30px;
        
    }
     input[type="submit"]{
        flex-basis: 100%;
        padding: 30px;
    }
table{
    border-collapse:collapse;
}
    td,th{
        border: solid 2px black;
       
    }
</style>

<body>

    <form action="" method="post">
        
        <?php
    $array = [
        "madrid",
        "barcelona",
        "sevilla",
        "bilbao"
    ];

    $meses = array(
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    );
  
    $temp = ["min", "max"];

    foreach ($array as $ciudad) {
        echo "<section>";
        echo "<h3> $ciudad  </h3>"; 
        foreach($meses as $mes){
            echo "<div>" . "<h4>$mes</h4> ";
            foreach ($temp as $t) {
        echo "<br>";
                if($t == "min"){
                    echo " min ";
                }else{
                    echo " max ";
                }
                echo "<input type='number'  name='{$ciudad}[$mes][$t]' value='" . (isset($_POST[$ciudad][$mes][$t]) ? $_POST[$ciudad][$mes][$t] : '') . "' step='0.1'>";
            }
           echo "</div>";
        }
      
// sin las llaves php no reconoce bien que ciudad es una variable, un array
        echo "</section>";
    }

    ?>

        <input type="submit" name="submit" value="Enviar">
    
</form>


<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$info = array_slice($_POST,0,-1);
/*los elementos que empiezan en 0, 
desde el principio, hasta la penultima posicion,
penultima porque si la posicion de finalizacion
es negativa, finaliza en contando el numero
de elementos puestos desde el final,*/
$submit = array_slice($_POST,-1,1);

echo "<pre>";
print_r($submit);
echo "</pre>";


     if(isset($_POST["submit"]) && !empty($_POST)){
        echo "<table>";
        echo "<tr>";
            echo "<th rowspan='2'>Ciudad</th>";
            foreach($_POST as $ciudad => $meses){
                foreach ($meses as $mes => $temps) {
                    echo "<th colspan='2'>$mes</th>";
                }
                break;
            };
        echo "</tr>";
        echo "<tr>";
            foreach($_POST as $ciudad => $meses){
              echo "<th> MIN </th>";
              echo "<th> MAX </th>";
            }
        echo "</tr>";

        foreach($_POST as $ciudad => $meses){
            echo "<tr>";
            echo "<td> $ciudad</td>";
            foreach($meses as $mes => $temps){

            echo "<td>" . $temps['min'] . "</td>";   
            echo "<td>" . $temps['max'] . "</td>";
      
            }
            echo "</tr>";
            
        }
        
        echo "</table>";
    }
     
    

    ?> 

</body>

</html>