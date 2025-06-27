<?php declare(strict_types=1);
// // Passing by reference in functions
// function increment(&$value) {
//     $value++;
// }

// // Using the function
// $num = 5;
// increment($num);
// echo "Incremented value: $num\n"; // Outputs: 6

// // Variable number of arguments in functions
// function sum(...$numbers) {
//     $total = 0;
//     foreach ($numbers as $number) {
//         $total += $number;
//     }
//     return $total;
// }

// // Using the function
// $result = sum(1, 2, 3, 4, 5);
// echo "Sum of numbers: $result\n"; // Outputs: 15


// // PHP is a loosely typed language, meaning you don't need to declare the data type of a variable when you create it.
// // However, you can use type declarations to enforce the type of parameters and return values in functions
// function multiply(int $a, int $b): int {
//     return $a * $b;
// }

// // Using the function
// $product = multiply(3, 4);
// echo "Product of numbers: $product\n"; // Outputs: 12

// // Type declarations can also be used with arrays and objects
// function processArray(array $arr): void {
//     foreach ($arr as $item) {
//         echo "Processing item: $item\n";
//     }
// }

// // Using the function
// $myArray = [1, 2, 3, 4];
// processArray($myArray); // Outputs: Processing item: 1, 2, 3, 4


// // PHP supports anonymous functions (closures) which can be assigned to variables or passed as arguments
// $greet = function(string $name): string {
//     return "Hello, $name!";
// };

// // Using the anonymous function
// echo $greet("World") . "\n"; // Outputs: Hello, World!

// // PHP supports higher-order functions, which can take other functions as arguments or return them
// function applyFunction(callable $func, array $data): array {
//     $result = [];
//     foreach ($data as $item) {
//         $result[] = $func($item);
//     }
//     return $result;
// }
// // Using the higher-order function
// $squared = applyFunction(function($x) { return $x * $x; }, [1, 2, 3, 4]);
// print_r($squared); // Outputs: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )
// echo "Squared values: " . implode(", ", $squared) . "\n"; // Outputs: Squared values: 1, 4, 9, 16

// // PHP supports variable functions, which allows you to call a function using a variable that contains the function name
// function sayHello() {
//     return "Hello!";
// }
// $functionName = 'sayHello';
// echo $functionName() . "\n"; // Outputs: Hello!

// // PHP supports first-class functions, meaning functions can be treated as values
// function firstClassFunctionExample() {
//     return "This is a first-class function example.";
// }
// $func = 'firstClassFunctionExample';
// echo $func() . "\n"; // Outputs: This is a first-class function example.

// // PHP supports function overloading using variable-length argument lists
// function overloadedFunction(...$args) {
//     $result = 0;
//     foreach ($args as $arg) {
//         if (is_numeric($arg)) {
//             $result += $arg;
//         }
//     }
//     return $result;
// }
// // Using the overloaded function
// echo "Overloaded function result: " . overloadedFunction(1, 2, 3) . "\n"; // Outputs: Overloaded function result: 6
// echo "Overloaded function result with mixed types: " . overloadedFunction(1, 2, "3", "4.5") . "\n"; // Outputs: Overloaded function result with mixed types: 10.5

$data = [1, 2, 3, 4];
$result = [];

foreach ($data as $item) {
    $result[] = $item * 2; // Example operation: multiplying each item by 2
    print_r($result);
}