<?php

class Vehicle {
    public $color;
    public $speed;
    public $brand;

    public function tripTime ($distance){
        return $distance / $this->speed;
    }
    
}

class Bicycle extends Vehicle{
    public $type;
    const CALORIES_PER_HOUR = 500;

    public function tripTime ($distance){
        return parent::tripTime($distance) * 1.2;
    }

    public function caloriesBurned($distance){
        return ($this->tripTime($distance) * self::CALORIES_PER_HOUR);
    }
}

class Car extends Vehicle{
    public $fuel;

    public function fuelConsumption($distance){
        return (($this->fuel * $distance) / 100);
    }
}

$car1 = new Car;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 130;
$car2->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

$distance = 100;
echo '<br>Car1 time:' . $car1->tripTime($distance);
echo '<br>Car2 time:' . $car2->tripTime($distance);
echo '<br>bicycle time: ' . $bicycle->triptime($distance);

echo '<br>Car1 fuelConsumprion ' . $car1->fuelConsumption($distance);
echo '<br>Car2 fuelConsumprion ' . $car2->fuelConsumption($distance);
echo '<br>Bicycle calories burned ' . $bicycle->caloriesBurned($distance);

