<?php
function countAdjacentPairs($array) {
    $count = 0;
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($array[$i] == $array[$i + 1]) {
            $count++;
        }
    }
    return $count;
}

$array = [1, 2, 2, 3, 4, 4, 4, 5];
echo "Кількість пар сусідніх елементів з однаковими значеннями: " . countAdjacentPairs($array);
?>
