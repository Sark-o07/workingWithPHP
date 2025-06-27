<?php

abstract class Car {
    public $model;
    public $name;

    public function __construct($model, $name) {
        $this->model = $model;
        $this->name = $name;
    }

     abstract public function intro() : string;
}

class Audi extends Car {
    public function intro() : string {
        return "The car is a {$this->name} and the model is {$this->model}: Built for performance and style.";
    }
}


class Mercedes extends Car {
    public function intro() : string {
        return "The car is a {$this->name} and the model is {$this->model}. Built for luxury and performance.";
    }
}

// Create objects of the subclasses
$audi = new Audi("A4", "Audi");
$mercedes = new Mercedes("C-Class", "Mercedes");

// Display the introduction of each car
echo $audi->intro() . "\n";
echo $mercedes->intro() . "\n";
