<?php

abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }

    public function calculatePerimeter() {
        return 4 * $this->side;
    }
}

$circle = new Circle(5);
// echo "Luas lingkaran: " . $circle->calculateArea();
// echo "Keliling lingkaran: " . $circle->calculatePerimeter();

$square = new Square(4);
// echo "Luas persegi: " . $square->calculateArea();
// echo "Keliling persegi: " . $square->calculatePerimeter();
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }

    public function calculatePerimeter() {
        return 4 * $this->side;
    }
}

$circle = new Circle(5);
echo "Luas lingkaran: " . $circle->calculateArea();
echo "Keliling lingkaran: " . $circle->calculatePerimeter();

$square = new Square(4);
echo "Luas persegi: " . $square->calculateArea();
echo "Keliling persegi: " . $square->calculatePerimeter();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">luas lingkaran: <?= $circle->calculateArea() ?><br>
keliling lingakaran: <?= $circle->calculatePerimeter() ?><br>
luas persegi: <?= $square->calculateArea() ?><br>
keliling persegi: <?= $square->calculatePerimeter() ?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>