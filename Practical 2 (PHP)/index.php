<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практична робота 2</title>
</head>
<body>
    <?php

        function TriangleCheck($x, $y, $z) {
            if ($x + $y > $z && $x + $z > $y && $y + $z > $x) {
                return true;
            } else {
                return false;
            }
        }

        function Long($x, $y, $z) {
            return $x + $y + $z;
        }

        $x = 5;
        $y = 3;
        $z = 3;

        $result = TriangleCheck($x, $y, $z);

        if ($result) {
            $long = Long($x, $y, $z);
            echo "Трикутник - можливий, його периметр: $long.<br>";
        } else {
            echo "Трикутник - неможливий!<br>";
        }

    ?>
</body>
</html>