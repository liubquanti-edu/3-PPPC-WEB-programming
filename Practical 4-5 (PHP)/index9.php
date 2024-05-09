<?php
function mostFrequentValue($array) {
    $validValues = array_map('strval', $array);
    $frequency = array_count_values($validValues);
    arsort($frequency);
    $mostFrequent = key($frequency);
    return $mostFrequent;
}

$array = [1.2, 2.5, 3.8, 1.2, 2.5, 2.5, 3.8, 4.3, 4.3];
echo "Найчастіше зустрічається значення: " . mostFrequentValue($array);
?>
