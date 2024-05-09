<?php
function increaseSalaries(&$salaries) {
    $averageSalary = array_sum($salaries) / count($salaries);
    foreach ($salaries as &$salary) {
        if ($salary < $averageSalary) {
            $salary *= 1.1;
        }
    }
}

$salaries = [1000, 1500, 2000, 2500, 3000];
increaseSalaries($salaries);
echo "Нові зарплати: " . implode(", ", $salaries);
?>
