<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сума і добуток чисел</title>
</head>
<body>
    <?php
    $A = rand(-10, 0);
    $B = rand(0, 10);
    $sum_positive = 0;
    $product_negative = 1;
    for ($i = $A; $i <= $B; $i++) {
        if ($i > 0) {
            $sum_positive += $i;
        } elseif ($i < 0) {
            $product_negative *= $i;
        }
    }
    echo "<h2>Сума додатніх та добуток від'ємних чисел у діапазоні від $A до $B</h2>";
    echo "<p>Сума додатніх чисел: $sum_positive</p>";
    echo "<p>Добуток від'ємних чисел: $product_negative</p>";
    ?>
</body>
</html>
