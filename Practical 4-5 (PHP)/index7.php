<?php
function replaceNegativeElements(&$array) {
    $minPositive = PHP_INT_MAX;
    foreach ($array as $element) {
        if ($element > 0 && $element < $minPositive) {
            $minPositive = $element;
        }
    }

    foreach ($array as &$element) {
        if ($element < 0) {
            $element = $minPositive;
        }
    }
}

$array = [1, -2, 3, -4, 5];
replaceNegativeElements($array);
echo "Масив після заміни від'ємних елементів: " . implode(", ", $array);
?>
