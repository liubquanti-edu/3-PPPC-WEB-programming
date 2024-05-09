<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблиця квадратів</title>
</head>
<body>
    <h2>Таблиця квадратів перших десяти цілих додатних чисел</h2>
    <table border="1">
        <tr>
            <th>Число</th>
            <th>Квадрат</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $square = $i * $i;
            echo "<tr><td>$i</td><td>$square</td></tr>";
        }
        ?>
    </table>
</body>
</html>
