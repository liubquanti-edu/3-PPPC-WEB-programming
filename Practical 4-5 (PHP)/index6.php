<?php
function getExcellentStudents($students, $threshold) {
    $excellentStudents = [];
    foreach ($students as $surname => $averageGrade) {
        if ($averageGrade >= $threshold) {
            $excellentStudents[] = $surname;
        }
    }
    return $excellentStudents;
}

$students = [
    'Іванов' => 4.5,
    'Петров' => 3.8,
    'Сидоров' => 4.2,
    'Коваленко' => 5.0,
];

$excellentStudents = getExcellentStudents($students, 4);
echo "Студенти з високими балами: " . implode(", ", $excellentStudents);
?>
