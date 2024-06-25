<?php
// Перевірка, чи встановлено метод запиту та чи є він POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Перевірка, чи передано значення string через POST
    if (isset($_POST["string"])) {
        $string = $_POST["string"];
        
        $modified_string = '';
        // Замінюємо кожен другий символ на пробіл
        for ($i = 0; $i < strlen($string); $i++) {
            if ($i % 2 == 1) {
                $modified_string .= ' ';
            } else {
                $modified_string .= $string[$i];
            }
        }
        
        echo "Модифікований рядок: $modified_string";
    } else {
        echo "Помилка: рядок не був переданий.";
    }
} else {
    echo "Помилка: неправильний метод запиту.";
}
?>