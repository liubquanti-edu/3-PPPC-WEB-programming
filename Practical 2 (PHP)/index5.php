<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практична робота 2</title>
</head>
<body>
    <?php

        function numericToTextGrade($grade) {
            switch ($grade) {
                case 1:
                    return "незадовільно";
                case 2:
                    return "достатньо";
                case 3:
                    return "задовільно";
                case 4:
                    return "добре";
                case 5:
                    return "відмінно";
                default:
                    return "невідома оцінка";
            }
        }

        $grade = 3;
        $textGrade = numericToTextGrade($grade);
        echo "Оцінка $grade - $textGrade";

    ?>
</body>
</html>