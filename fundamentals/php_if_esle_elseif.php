<?php
// if-else-elseif statement example
$number = 10;
if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}
// Ternary operator example
$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Status: $status\n";

// Switch statement example
$day = 3;
switch ($day) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Invalid day\n";
}

// Nested if-else example
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

// Using if-else with logical operators
$age = 20;
$hasPermission = true;
if ($age >= 18 && $hasPermission) {
    echo "You can enter the club.\n";
} else {
    echo "You cannot enter the club.\n";
}

