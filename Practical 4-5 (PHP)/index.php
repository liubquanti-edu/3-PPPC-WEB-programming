<?php
function countNegativeElements($array) {
    $count = 0;
    foreach ($array as $element) {
        if ($element < 0) {
            $count++;
        }
    }
    return $count;
}

$array = [1, -2, 3, -4, 5];
echo "Кількість від’ємних елементів: " . countNegativeElements($array);
?>
