<?php
function calculateWeeklyTemperatureAverage($temperatures) {
    $sum = array_sum($temperatures);
    $count = count($temperatures);
    return $sum / $count;
}

$temperatures = [25, 26, 27, 28, 29, 30, 31];
echo "Середня температура за тиждень: " . calculateWeeklyTemperatureAverage($temperatures);
?>
