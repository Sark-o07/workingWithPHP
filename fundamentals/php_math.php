<?php
// PHP Math Functions
// Basic arithmetic operations
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "\n"; // Outputs: 13
echo "Subtraction: " . ($a - $b) . "\n"; // Outputs: 7
echo "Multiplication: " . ($a * $b) . "\n"; // Outputs: 30
echo "Division: " . ($a / $b) . "\n"; // Outputs: 3.3333333333333
echo "Modulus: " . ($a % $b) . "\n"; // Outputs: 1
echo "Exponentiation: " . ($a ** $b) . "\n"; // Outputs: 1000

// Using built-in math functions
echo "Square root of $a: " . sqrt($a) . "\n"; // Outputs: 3.1622776601684
echo "Absolute value of -$a: " . abs(-$a) . "\n"; // Outputs: 10
echo "Maximum of $a and $b: " . max($a, $b) . "\n"; // Outputs: 10
echo "Minimum of $a and $b: " . min($a, $b) . "\n"; // Outputs: 3
echo "Rounded value of 5.7: " . round(5.7) . "\n"; // Outputs: 6
echo "Ceiling of 5.1: " . ceil(5.1) . "\n"; // Outputs: 6
echo "Floor of 5.9: " . floor(5.9) . "\n"; // Outputs: 5
echo "Random number between 1 and 100: " . rand(1, 100) . "\n"; // Outputs a random number between 1 and 100

?>