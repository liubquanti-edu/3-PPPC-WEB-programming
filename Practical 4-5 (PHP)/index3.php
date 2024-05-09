<?php
function calculateAverageOdd($array) {
    $sum = 0;
    $count = 0;
    foreach ($array as $element) {
        if ($element % 2 != 0) {
            $sum += $element;
            $count++;
        }
    }
    return $sum / $count;
}

$array = [1, 2, 3, 4, 5];
echo "Середнє арифметичне непарних елементів: " . calculateAverageOdd($array);
?>
