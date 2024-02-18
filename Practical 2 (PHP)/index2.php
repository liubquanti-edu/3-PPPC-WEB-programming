<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практична робота 2</title>
</head>
<body>
    <?php

        function checkNumber($number) {
            if ($number > 0) {
                echo "$number є додатнім числом.";
            } elseif ($number < 0) {
                echo "$number є від'ємним числом.";
            } else {
                echo "$number є нулем.";
            }
        }

        checkNumber(5);
        checkNumber(-3);
        checkNumber(0);

    ?>
</body>
</html>