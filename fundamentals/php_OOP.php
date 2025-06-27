<?php
// // From PHP5 onwards, PHP supports Object-Oriented Programming (OOP) concepts.
// // OOP allows you to create classes and objects, encapsulate data, and use inheritance and polymorphism.
// // A class is a blueprint for creating objects, and an object is an instance of a class.

// // in a class, you can define properties (variables) and methods (functions).
// // A class can also have a constructor, which is a special method that is called when an object is created.
// class MyCar {
//     // properties
//     public $model;
//     public $color;
//     public $year;

//     // constructor
//     function __constructor($model, $color, $year) {
//         $this->model = $mode;
//         $this->color = $color;
//         $this->year = $year;
//     }

//     // method
//     function get_details() {
//         return "Car Moddel: $this->model\nColor: $this->color\nYear: $this->year\n";
//     }

//     // static method
//     static function get_class_name() {
//         return __CLASS__;
//     }

//     // static properties
//     static $manufacturer = "Toyota";

//     // static method to get manufacturer
//     static function get_manufacturer() {
//         return self::$manufacturer;
//     }

//     // destructor
//     function __destruct() {
//         // This method is called when the object is destroyed
//         echo "Object $this->model of class " . __CLASS__ . " is being destroyed.\n";
//     }
// }

// // Creating an object of the class
// $myCar = new MyCar();
// $myCar->model = "Corolla";
// $myCar->color = "Red";
// $myCar->year = 2020;
// echo "myCar manufacturer: " . $myCar->get_manufacturer() . "\n"; // Calling the static method to get manufacturer
// // $myCar->manufacturer = "Honda"; // Changing the static property value this way will not work as static properties are shared across all instances of the class



// $myCar2 = new MyCar();
// $myCar2->model = "Matrix";
// $myCar2->color = "Blue";
// $myCar2->year = 2021;

// $myCar3 = new MyCar();
// $myCar3->model = "Camry";
// $myCar3->color = "Black";
// $myCar3->year = 2022;

// echo $myCar3->get_details(); // Displaying the details of the third car

// // Displaying the details of the second car
// echo "myCar2 manufacturer: " . $myCar2->get_manufacturer() . "\n"; // Calling the static method to get manufacturer
// echo "Class Name: " . $myCar2->get_class_name() . "\n"; // Calling the static method to get class name
// echo $myCar2->get_details(); // Displaying the details of the second car


// // Displaying the details of the car
// echo $myCar->get_details();

// // Displaying the class name using static method
// echo "Class Name: " . MyCar::get_class_name() . "\n";

// // Displaying the manufacturer using static method
// echo "Manufacturer: " . MyCar::get_manufacturer() . "\n";

// Access modifiers
// PHP supports three access modifiers: public, protected, and private.
// Public properties and methods can be accessed from anywhere.
// Protected properties and methods can be accessed only within the class and its subclasses.
// Private properties and methods can be accessed only within the class itself.
class MyBike {
    const MANUFACTURER = "Yamaha";
    // properties
    public $model;
    protected $color;
    private $year;

    // constructor
    function __construct($model, $color, $year) {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    // method to get details
    public function get_details() {
        return "Bike Model: $this->model\nColor: $this->color\nYear: $this->year\n";
    }

    // method to get year (private property)
    private function get_year() {
        return $this->year;
    }

    function get_color_year() {
        $year = $this->get_year(); // Accessing private method within the class
        return "Bike Year: $year\nBike Color: $this->color\n";
    }
}
// Creating an object of the class
$myBike = new MyBike("Q-Link", "Black", 2021);
// Displaying the details of the bike
echo $myBike->get_details(); // This will work as get_details() is public

// echo $myBike->get_year(); // This will cause an error as get_year() is private and cannot be accessed outside the class
// Accessing public property
echo "Bike Model: " . $myBike->model . "\n"; // This will work as model is public
// echo "Bike Color: " . $myBike->color . "\n"; // This will cause an error as color is protected and cannot be accessed outside the class
// echo "Bike Year: " . $myBike->year . "\n"; // This will cause an error as year is private and cannot be accessed outside the class
// Accessing protected property (this will cause an error)


echo $myBike->get_color_year(); // This will work as get_color_year() is public and can access protected property color
echo "Bike Manufacturer: " . MyBike::MANUFACTURER . "\n"; // Accessing constant using class name 


