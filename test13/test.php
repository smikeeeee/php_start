<?php

class Car{
    public $fuel;
    public $doors = 5;
    public $speed;
    

        const CON_X = 2;
        const CON_Y = 5;
        const CON_Z = 12;
        //К 6 заданию


    function test() {
        echo 'test function';
    }

    public function fuelСonsumption($distance){
        $benz = ($distance/100)*$this->fuel;
        return $benz;
        //функция для расчёта расхода топлива на заданное расстояние
    }

    public function __construct($fuel, $doors, $speed);
    {
        $this->fuel = $fuel;
        $this->doors = $doors;
        $this->price = $price;
    }

    public static function getMaxConstant(){
        return max(self::CON_X, self::CON_Y, self::CON_Z);
    }
}

$car1 = new Car(10, 5, 90);

$car2 = new Car(9, 5, 70,);

// $car3 = new Car;
// $car4 = new Car;

// $car3->speed = 300;
// $car3->fuel = 3;
// echo '<pre>';
// var_dump ($car3);
// echo '</pre>';

// $car4->speed = 120;
// $car4->fuel = 8;

// echo $car3->speed;
// echo '<br>';
// echo $car2->doors;

echo $car1->fuelСonsumption(400);
//5

echo '<br>';

echo Car::CON_X;
echo '<br>';
echo Car::CON_Y;
echo '<br>';
echo Car::CON_Z;
echo '<hr>';

echo Car::getMaxConstant();
//7

?>