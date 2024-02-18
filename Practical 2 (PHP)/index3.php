<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практична робота 2</title>
</head>
<body>
    <?php

        function replaceSmallest($a, $b, $c) {

            $min = min($a, $b, $c);


            $max1 = ($a !== $min) ? $a : (($b !== $min) ? $b : $c);
            $max2 = ($a !== $min && $a !== $max1) ? $a : (($b !== $min && $b !== $max1) ? $b : $c);

            $replacement = $max1 * $max2;
            
            if ($a === $min) {
                $a = $replacement;
            } elseif ($b === $min) {
                $b = $replacement;
            } else {
                $c = $replacement;
            }

            return [$a, $b, $c];
        }

        $a = 2;
        $b = 5;
        $c = 1;
        $newNumbers = replaceSmallest($a, $b, $c);
        echo "Нові числа: " . implode(', ', $newNumbers);

    ?>
</body>
</html>