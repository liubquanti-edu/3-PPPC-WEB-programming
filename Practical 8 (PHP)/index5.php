<?php
class Triangle {
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getPerimeter() {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function displayPerimeter() {
        return "Периметр трикутника: " . $this->getPerimeter();
    }
}

$side1 = $side2 = $side3 = 0;
$perimeter = '';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $side1 = $_POST['side1'] ?? 0;
    $side2 = $_POST['side2'] ?? 0;
    $side3 = $_POST['side3'] ?? 0;

    if ($side1 && $side2 && $side3) {
        $triangle = new Triangle($side1, $side2, $side3);
        $perimeter = $triangle->displayPerimeter();
    } else {
        $perimeter = "Будь ласка, введіть усі три сторони трикутника.";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат обчислення периметра трикутника</title>
</head>
<body>
    <h1>Результат обчислення периметра трикутника:</h1>
    <p><?php echo htmlspecialchars($perimeter, ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="index5.html">Повернутися до форми</a>
</body>
</html>
