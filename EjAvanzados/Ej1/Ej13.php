<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Divisas</title>
    <script src="validacion.js"></script>
</head>
<body>

<?php
define("Dolar", 1);
define("Euro", 0.5);
define("Yen", 10);
define("Libra", 0.75);

$divisas = [
    "Dolar" => Dolar,
    "Euro" => Euro,
    "Yen" => Yen,
    "Libra" => Libra
];

function aDolar($divisa1, $cantidad) {
    global $divisas; 
    return $cantidad / $divisas[$divisa1];
}

function conversor($divisa1, $cantidad, $divisa2) {
    global $divisas; 
    $cant = aDolar($divisa1, $cantidad);
    $resultado = $divisas[$divisa2] * $cant;
    return $resultado;
}

if(isset($_GET["divisa1"]) && isset($_GET["divisa2"])){
$divisa1 = $_GET["divisa1"];
$divisa2 = $_GET["divisa2"];
}else{
$divisa1 = "";
$divisa2 = "";
}


?>

<form action="" method="get">
    <label for="divisa1">DIVISA1:</label>
    <select name="divisa1" id="divisa1">
        <option value="Dolar" <?php echo ($divisa1 == "Dolar") ? 'selected' : ''; ?>>DOLAR</option>
        <option value="Euro" <?php echo ($divisa1 == "Euro") ? 'selected' : ''; ?>>EURO</option>
        <option value="Yen" <?php echo ($divisa1 == "Yen") ? 'selected' : ''; ?>>YEN</option>
        <option value="Libra" <?php echo ($divisa1 == "Libra") ? 'selected' : ''; ?>>LIBRA</option> 
    </select>
    <label for="cant">Cantidad:</label>
    <input type="number" name="cant" step="0.01" id="cant" value="<?php echo isset($_GET['cant']) ? htmlspecialchars($_GET['cant']) : ''; ?>" required>
    <label for="divisa2">DIVISA2:</label>
    <select name="divisa2" id="divisa2">
        <option value="Dolar" <?php echo ($divisa2 == "Dolar") ? 'selected' : ''; ?>>DOLAR</option>
        <option value="Euro" <?php echo ($divisa2 == "Euro") ? 'selected' : ''; ?>>EURO</option>
        <option value="Yen" <?php echo ($divisa2 == "Yen") ? 'selected' : ''; ?>>YEN</option>
        <option value="Libra" <?php echo ($divisa2 == "Libra") ? 'selected' : ''; ?>>LIBRA</option> 
    </select>
    <input type="submit" name="submit" value="Calcular"/>
</form>

<?php


if (isset($_GET["submit"]) && !empty($_GET["cant"])) {
    $cantidad = $_GET["cant"];
    ?>
    <script>
    let cantidad = <?php echo $cantidad; ?>;
    if (!validacion(cantidad)) {
        alert("ENTRADA INVALIDA");
    } 
    </script>
    <?php
   
    $resultado = conversor($divisa1, $cantidad, $divisa2);
    echo "$resultado de $divisa2";
   

}


?>


</body>
</html>
