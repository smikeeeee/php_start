<?php

class Car{
    public $color = 'White';
    public $speed;
    public $fuel;
    public $brand;

    function test() {
        echo 'test function';
    }

    public function tripTime($distance){
        $time = $distance / $this->speed;
        return $time;
    }

    public function __construct($brand, $speed, $fuel, $color)
    {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
        echo $color;
    }

    
}

    $car1 = new Car('Audi', 110, 12, 'Yellow');
        // $car1->brand = 'Audi';
        // $car1->speed = 110;
        // $car1->fuel = 12;
        
        // echo $car1->test() . '<br>';

        echo '<br>';

        echo $car1->tripTime(1000) . '<br>';
        

    // $car2 = new Car;
    //     $car2 -> color = 'Green';
    //     $car2 -> brand = 'Toyota';
    //     $car2 -> speed = 130;
    //     $car2 -> fuel = 12;

    // echo $car2->color . '<br>';

    // echo $car2->tripTime(1000) . '<br>';


?>