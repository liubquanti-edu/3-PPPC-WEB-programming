<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблиця вартості яблук</title>
</head>
<body>
    <?php
    $price_per_kg = rand(1, 10);
    $step = 100;
    echo "<h2>Таблиця вартості яблук</h2>";
    echo "Число введення: $price_per_kg";
    echo "<table border='1'>";
    echo "<tr><th>Вага (г)</th><th>Вартість</th></tr>";
    for ($weight = 100; $weight <= 1000; $weight += $step) {
        $price = $price_per_kg * ($weight / 1000);
        echo "<tr><td>$weight</td><td>$price</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>