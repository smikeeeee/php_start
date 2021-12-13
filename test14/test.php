<?php
class Figure {
    public $square;
    public $color;

    const SIDES_COUNT = 4;

//(1)
    public function infoAbout(){
        echo 'Это геометрическая фигура!';
    }//(2)

    

}

class Rectangle extends Figure
{
    private $a;
    private $b;

    const SIDES_COUNT = 4;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea(){
        return $this->a * $this->b;
    }

    final function infoAbout(){
        return 'Это класс прямоугольника. У него ' . self::SIDES_COUNT . ' стороны';
    }

}//(4)

class Triangle extends Figure{
    private $a;
    private $b;
    private $c;

    const SIDES_COUNT = 3;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea(){
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    final function infoAbout(){
        return 'Это класс треугольника. У него ' . self::SIDES_COUNT . ' стороны и по жизни всё плохо...';
    }
}//(6)

class Square extends Figure{
    private $a;

    const SIDES_COUNT = 4;//(7)

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getArea(){
        return pow($this->a, 2);
    }

    final function infoAbout(){
        return 'Это класс квадрата. У него ' . self::SIDES_COUNT . ' стороны';
    }
}//(5)

$rectangle1 = new Rectangle(4, 5);
$rectangle2 = new Rectangle(6, 8);
echo 'Прямоугольник 1 имеет площадь: ' . $rectangle1->getArea() . '<br>';
echo 'Прямоугольник 2 имеет площадь: ' . $rectangle2->getArea() . '<br>';

$square1 = new Square(3);
$square2 = new Square(6);
echo 'Квадрат 1 имеет площадь: ' . $square1->getArea().'<br>';
echo 'Квадрат 2 имеет площадь: ' . $square2->getArea().'<br>';


$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(7, 5, 8);
echo 'Треугольник 1 имеет площадь: ' . $triangle1->getArea() . '<br>';
echo 'Треугольник 2 имеет площадь: ' . $triangle2->getArea() . '<br>';