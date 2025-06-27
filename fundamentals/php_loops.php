<?php
// PHP LOOPS
// Loops are used to execute a block of code repeatedly until a specified condition is met.
// PHP supports several types of loops: while, do-while, for, and foreach.

// 1. While Loop
$counter = 1;
while ($counter <= 5) {
    echo "Counter: $counter\n";
    $counter++;
}

// 2. Do-While Loop
$counter = 1;
do {
    echo "Counter in do-while: $counter\n";
    $counter++;
} while ($counter <= 5);

// 3. For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Counter in for loop: $i\n";
}

// 4. Foreach Loop (used for arrays)
$array = array("apple", "banana", "cherry");
foreach ($array as $fruit) {
    echo "Fruit: $fruit\n";
}

// 5. Byref Foreach Loop
$numbers = array(1, 2, 3);
foreach ($numbers as &$number) {
    $number *= 2; // Modify the value by reference
}

echo "The Value of number is: {$number}\n"; // Displaying the value of $number from the foreach byref loop
// it is best to unset the reference variable after use to avoid unexpected behavior
unset($number); // Unset the reference variable to avoid unexpected behavior

foreach ($numbers as $num) {
    echo "Modified number: $num\n";
}

// 6. Break and Continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Breaking at 5\n";
        break; // Exit the loop when $i is 5
    }
    if ($i % 2 == 0) {
        echo "Skipping even number: $i\n";
        continue; // Skip the rest of the loop for even numbers
    }
    echo "Odd number: $i\n";
}

// 7. Nested Loops
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "Nested Loop: i = $i, j = $j\n";
    }
}

// 8. Looping through associative arrays
$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
foreach ($associativeArray as $key => $value) {
    echo "Key: $key, Value: $value\n";
}

// 9. Looping through objects
class Person {
    public $name;
    public $age;
    public $city;
    function __construct($name, $age, $city) {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
}

$person = new Person("Alice", 25, "Los Angeles");
foreach ($person as $property => $value) {
    echo "Property: $property, Value: $value\n";
}
echo $_SERVER['PHP_SELF'];
?>

