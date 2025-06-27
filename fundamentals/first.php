<?php
// This block of code demonstrates the use of variables, functions, and scope in PHP.
$x = 7;

function myTestFunction() {
    global $x; // Declare $x as global to access the variable defined outside the function
    echo "The value of x is: $x\n";
}

myTestFunction();

// learning about static variables
function myTest() {
    static $x = 5;
    echo "The value of x inside myTest is: $x\n";
    $x++; 
}

// Calling the function multiple times to see the effect of static variable
myTest();
myTest();
myTest();

echo "the value of x is: $x\n"; // This will still refer to the global $x, which is 7

// Demonstrating different ways to echo and print variables

// notice \n for new line can't be used in single quotes
echo 'the value of x is: ' . $x . "\n"; // echo with single quotes

print "the value of x is: $x\n"; // print with double quotes

echo "The value of x is: {$x}\n"; // Using curly braces for clarity

// Data types in PHP
$intVar = 10; // Integer
$floatVar = 10.5; // Float
$stringVar = "Hello, 101 World!"; // String
$arrayVar = array(1, 2, 3, 'four'); // Array
$boolVar = true; // Boolean

// PHP Object
class Car {
    public $color;
    public $model;

    function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    
    function getDetails() {
        return "Car model: $this->model\nColor: $this->color\n";
    }
}
$myCar = new Car("Red", "Toyota");
echo $myCar->getDetails();

// Displaying variable types and values using var_dump
echo "Variable types and values:\n";
var_dump($intVar, $floatVar, $stringVar, $arrayVar, $boolVar, $myCar);

// type casting
$floaToInt = (int) $floatVar; // Casting float to integer
echo "Float to Integer: $floaToInt\n";

$stringToInt = (int) $stringVar; // Casting string to integer
echo "String to Integer: $stringToInt\n"; // This will output 0 since the string does not start with a number

$intToString = (string) $intVar; // Casting integer to string
echo "Integer to String: $intToString\n";
var_dump($intToString); // Display the type and value of the casted variable

?>