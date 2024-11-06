<?php
$file_path = 'results.txt';

// Inicializa el archivo de resultados si no existe
if (!file_exists($file_path)) {
    // Crea el archivo y escribe los resultados iniciales
    file_put_contents($file_path, "0\n0"); // Con cebolla, Sin cebolla
}

// Manejo de votaciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vote = $_POST['vote'] ?? '';

    // Leer resultados actuales
    $results = file($file_path, FILE_IGNORE_NEW_LINES);
    $withOnion = (int)$results[0];
    $withoutOnion = (int)$results[1];

    // Controlar que el usuario no haya votado (simple control usando una cookie)
    if (!isset($_COOKIE['has_voted'])) {
        if ($vote === 'withOnion') {
            $withOnion++;
        } elseif ($vote === 'withoutOnion') {
            $withoutOnion++;
        } else {
            echo "Voto inválido.";
            exit;
        }

        // Guardar resultados actualizados en el archivo
        file_put_contents($file_path, "$withOnion\n$withoutOnion");
        setcookie('has_voted', '1', time() + (86400 * 30), "/"); // Expira en 30 días
    }
}

// Leer resultados actualizados
$results = file($file_path, FILE_IGNORE_NEW_LINES);
$withOnion = (int)$results[0];
$withoutOnion = (int)$results[1];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta: Tortilla de Patata</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        #results { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Encuesta: ¿Tortilla de Patata con cebolla o sin cebolla?</h1>
    <form method="POST" action="">
        <button type="submit" name="vote" value="withOnion">Con cebolla</button>
        <button type="submit" name="vote" value="withoutOnion">Sin cebolla</button>
    </form>
    
    <div id="results">
        <h2>Resultados</h2>
        <canvas id="resultsChart" width="400" height="200"></canvas>
    </div>

    <script>
        // Resultados en variables de JavaScript
        const withOnion = <?php echo $withOnion; ?>;
        const withoutOnion = <?php echo $withoutOnion; ?>;

        function updateChart() {
            const ctx = document.getElementById('resultsChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Con cebolla', 'Sin cebolla'],
                    datasets: [{
                        label: 'Votos',
                        data: [withOnion, withoutOnion],
                        backgroundColor: ['#FF6384', '#36A2EB'],
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Cargar resultados al iniciar
        updateChart();
    </script>
</body>
</html>
