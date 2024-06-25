<?php
// Перевірка, чи встановлено метод запиту та чи є він POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Перевірка, чи передано значення score через POST
    if (isset($_POST["score"])) {
        $score = $_POST["score"];
        
        // Перевірка, чи є score числом у межах від 0 до 100
        if (!is_numeric($score) || $score < 0 || $score > 100) {
            echo "Помилка: введіть число від 0 до 100.";
        } else {
            // Визначення оцінки на основі введених балів
            if ($score <= 59) {
                echo "Оцінка: Незадовільно";
            } elseif ($score <= 74) {
                echo "Оцінка: Задовільно";
            } elseif ($score <= 89) {
                echo "Оцінка: Добре";
            } else {
                echo "Оцінка: Відміно";
            }
        }
    } else {
        echo "Помилка: бали не були передані.";
    }
} else {
    echo "Помилка: неправильний метод запиту.";
}
?>