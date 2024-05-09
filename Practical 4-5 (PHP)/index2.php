<?php
function findNumber($array, $number) {
    return in_array($number, $array);
}

$array = [1, 2, 3, 4, 5];
$number = 3;
if (findNumber($array, $number)) {
    echo "Число $number зустрічається у масиві";
} else {
    echo "Число $number не зустрічається у масиві";
}
?>
