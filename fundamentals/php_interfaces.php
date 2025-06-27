<?php
// This code demonstrates the use of interfaces in PHP to define a contract for classes that implement it.
// Interfaces allow you to define methods that must be implemented by any class that uses the interface.
// This is useful for ensuring that certain methods are available in different classes, promoting consistency and interoperability.
// Interfaces can also be used to achieve polymorphism, where different classes can be treated as the same type if they implement the same interface.

Interface Vehicle {
    public function start();
    public function stop();
    public function getDetails();
}

class Car implements Vehicle {
    private $model;
    private $color;
    private $year;

    public function __construct($model, $color, $year) {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function start() {
        return "Car {$this->model} started.\n";
    }

    public function stop() {
        return "Car {$this->model} stopped.\n";
    }

    public function getDetails() {
        return "Car Model: {$this->model}\nColor: {$this->color}\nYear: {$this->year}\n";
    }

    public function getManufacturer() {
        return "Manufacturer: Toyota\n";
    }
}

$toyotaCar = new Car("Camry", "Blue", 2022);
echo $toyotaCar->start();
echo $toyotaCar->getDetails();
echo $toyotaCar->stop();
echo $toyotaCar->getManufacturer();