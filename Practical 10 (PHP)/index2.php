<?php
// Перевірка, чи встановлено метод запиту та чи є він POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Перевірка, чи передано значення heights через POST
    if (isset($_POST["heights"])) {
        $heights_input = $_POST["heights"];
        // Перетворення введених даних на масив чисел
        $heights = array_map('floatval', explode(',', $heights_input));
        
        // Перевірка, чи масив heights не порожній
        if (count($heights) == 0) {
            echo "Помилка: введіть коректні дані.";
        } else {
            // Обчислення середнього зросту
            $average_height = array_sum($heights) / count($heights);
            // Підрахунок кількості учнів, чий зріст вище середнього
            $count_above_average = count(array_filter($heights, function($height) use ($average_height) {
                return $height > $average_height;
            }));
            
            echo "Кількість учнів, чий зріст вище середнього: $count_above_average";
        }
    } else {
        echo "Помилка: дані не були передані.";
    }
} else {
    echo "Помилка: неправильний метод запиту.";
}
?>