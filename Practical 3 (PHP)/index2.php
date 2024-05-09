<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблиця множення</title>
</head>
<body>
    <?php
    $number = rand(1, 10);
    echo "<h2>Таблиця множення на $number</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Число</th><th>Результат</th></tr>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>$i</td><td>$result</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
