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
        echo "Периметр трикутника: " . $this->getPerimeter();
    }
}

$triangle = new Triangle(3, 4, 5);
$triangle->displayPerimeter();
?>
