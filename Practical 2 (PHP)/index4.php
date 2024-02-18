<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практична робота 2</title>
</head>
<body>
    <?php

        function calculate($operator, $operand1, $operand2) {
            switch ($operator) {
                case '+':
                    return $operand1 + $operand2;
                case '-':
                    return $operand1 - $operand2;
                case '*':
                    return $operand1 * $operand2;
                case '/':
                    if ($operand2 != 0) {
                        return $operand1 / $operand2;
                    } else {
                        return "Помилка: Ділення на нуль!";
                    }
                default:
                    return "Помилка: Непідтримувана операція!";
            }
        }


        $operator = '+';
        $operand1 = 10;
        $operand2 = 5;
        $result = calculate($operator, $operand1, $operand2);
        echo "Результат: $result";

    ?>
</body>
</html>