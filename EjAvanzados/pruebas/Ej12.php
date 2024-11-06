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
define("Libra", 0.75); // Cuarta divisa

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
    global $divisas; // Asegúrate de que las divisas sean accesibles
    $cant = aDolar($divisa1, $cantidad);
    $resultado = $divisas[$divisa2] * $cant;
    echo number_format($resultado, 2) . " de " . $divisa2;
}
?>

<?php


if (isset($_GET["submit"]) && !empty($_GET["cant"])) {
    $cantidad = $_GET["cant"];
    ?>
    <script>
    let cantidad = <?php echo $cantidad; ?>;
    if (validacion(cantidad)) {
        <?php
        conversor($_GET["divisa1"], $_GET["cant"], $_GET["divisa2"]);
        ?>
    } else {
        alert("ENTRADA INVALIDA");
    }
    </script>
    <?php
}
?>

<form action="" method="get">
    <label for="divisa1">DIVISA1:</label>
    <select name="divisa1" id="divisa1">
        <option value="Dolar">DOLAR</option>
        <option value="Euro">EURO</option>
        <option value="Yen">YEN</option>
        <option value="Libra">LIBRA</option> <!-- Cuarta divisa -->
    </select>
    <label for="cant">Cantidad:</label>
    <input type="number" name="cant" step="0.01" id="cant" required>
    <label for="divisa2">DIVISA2:</label>
    <select name="divisa2" id="divisa2">
        <option value="Dolar">DOLAR</option>
        <option value="Euro">EURO</option>
        <option value="Yen">YEN</option>
        <option value="Libra">LIBRA</option> <!-- Cuarta divisa -->
    </select>
    <input type="submit" name="submit" value="Calcular"/>
</form>
</body>
</html>


