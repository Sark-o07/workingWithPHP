<?php
// PHP Comparison Operators
// Comparison operators are used to compare two values and return a boolean result (true or false).
$a = 10;
$b = 20;
// echo "a = $a, b = $b\n";
// echo "a == b: " . ($a == $b ? 'true' : 'false') . "\n"; // Equal to
// echo "a != b: " . ($a != $b ? 'true' : 'false') . "\n"; // Not equal to
// echo "a < b: " . ($a < $b ? 'true' : 'false') . "\n"; // Less than
// echo "a > b: " . ($a > $b ? 'true' : 'false') . "\n"; // Greater than
// echo "a <= b: " . ($a <= $b ? 'true' : 'false') . "\n"; // Less than or equal to
// echo "a >= b: " . ($a >= $b ? 'true' :'false') . "\n"; // Greater than or equal to
// echo "a === b: " . ($a === $b ? 'true' : 'false') . "\n"; // Identical (equal and of the same type)
// echo "a !== b: " . ($a !== $b ? 'true' : 'false') . "\n"; // Not identical (not equal or not of the same type)
// echo "a <=> b: " . ($a <=> $b) . "\n"; // Spaceship operator (returns -1, 0, or 1)
// echo "a == '10': " . ($a == '10' ? 'true' : 'false') . "\n"; // Loose comparison (type juggling)
// echo "a === '10': " . ($a === '10' ? 'true' : 'false') . "\n"; // Strict comparison (no type juggling)
// echo "a != '10': " . ($a != '10' ? 'true' : 'false') . "\n"; // Loose not equal
// echo "a !== '10': " . ($a !== '10' ? 'true' : 'false') . "\n"; // Strict not equal
// echo "a < '20': " . ($a < '20' ? 'true' : 'false') . "\n"; // Loose less than
// echo "a > '5': " . ($a > '5' ? 'true' : 'false') . "\n";
// echo "a <= '10': " . ($a <= '10' ? 'true' : 'false') . "\n"; // Loose less than or equal to
// echo "a >= '10': " . ($a >= '10' ? 'true' : 'false') . "\n"; // Loose greater than or equal to
// echo "a <=> '20': " . ($a <=> '20') . "\n"; // Spaceship operator with loose comparison
// echo "a <=> '5': " . ($a <=> '5') . "\n"; // Spaceship operator with loose comparison
// echo "a <=> '10': " . ($a <=> '10') . "\n";
// echo "a <=> '10.0': " . ($a <=> '10.0') . "\n"; // Spaceship operator with loose comparison
// echo "a <=> '10.00': " . ($a <=> '10.00') . "\n"; // Spaceship operator with loose comparison

// PHP Logical Operators
// Logical operators are used to combine conditional statements.
$condition1 = true;
$condition2 = false;
$var = $condition1 xor $condition2; // XOR operator
echo "var = $var\n"; // Outputs: var = true
echo ($var ? 'true' : 'false') . "\n"; // Outputs: true
echo ( 0 ? 'true' : 'false') . "\n"; // Outputs: false

// echo "condition1 = $condition1, condition2 = $condition2\n";
// echo "condition1 && condition2: " . ($condition1 && $condition2 ? 'true' : 'false') . "\n"; // AND operator
// echo "condition1 || condition2: " . ($condition1 || $condition2 ? 'true' : 'false') . "\n"; // OR operator
// echo "!condition1: " . (!$condition1 ? 'true' : 'false') . "\n"; // NOT operator
// echo "!condition2: " . (!$condition2 ? 'true' : 'false') . "\n"; // NOT operator
echo "condition1 xor condition2: " . (($condition1 xor $condition2) ? 'true' : 'false') . "\n"; // XOR operator
// echo "condition1 && !condition2: " . ($condition1 && !$condition2 ? 'true' : 'false') . "\n"; // AND with NOT operator
// echo "condition1 || !condition2: " . ($condition1 || !$condition2 ? 'true' : 'false') . "\n"; // OR with NOT operator
// echo "!(condition1 && condition2): " . (!($condition1 && $condition2) ? 'true' : 'false') . "\n"; // NOT with AND operator
// echo "!(condition1 || condition2): " . (!($condition1 || $condition2) ? 'true' : 'false') . "\n"; // NOT with OR operator
// echo "!(condition1 xor condition2): " . (!($condition1 xor $condition2) ? 'true' : 'false') . "\n"; // NOT with XOR operator
// echo "condition1 && (condition2 || !condition1): " . ($condition1 && ($condition2 || !$condition1) ? 'true' : 'false') . "\n";
// echo "condition1 || (condition2 && !condition1): " . ($condition1 || ($condition2 && !$condition1) ? 'true' : 'false') . "\n";
 echo "condition1 xor (condition2 && !condition1): " . (($condition1 xor ($condition2 && !$condition1)) ? 'true' : 'false') . "\n";

 // PHP Bitwise Operators
// Bitwise operators are used to perform operations on bits of integers.
$a = 5; // 0101 in binary
$b = 3; // 0011 in binary
// echo "a = $a, b = $b\n";
// echo "a & b: " . ($a & $b) . "\n";
// echo "a | b: " . ($a | $b) . "\n";
// echo "a ^ b: " . ($a ^ $b) . "\n";
// echo "~a: " . (~$a) . "\n"; // Bitwise NOT
// echo "a << 1: " . ($a << 1) . "\n"; // Left shift
// echo "a >> 1: " . ($a >> 1) . "\n"; // Right shift
// echo "a & 1: " . ($a & 1) . "\n"; // Bitwise AND with 1
// echo "a | 1: " . ($a | 1) . "\n"; // Bitwise OR with 1
// echo "a ^ 1: " . ($a ^ 1) . "\n"; // Bitwise XOR with 1
// echo "a & 2: " . ($a & 2) . "\n"; // Bitwise AND with 2
// echo "a | 2: " . ($a | 2) . "\n"; // Bitwise OR with 2
// echo "a ^ 2: " . ($a ^ 2) . "\n"; // Bitwise XOR with 2
// echo "a & 3: " . ($a & 3) . "\n"; // Bitwise AND with 3
// echo "a | 3: " . ($a | 3) . "\n";
// echo "a ^ 3: " . ($a ^ 3) . "\n";

// PHP Assignment Operators
// Assignment operators are used to assign values to variables.
$x = 10; // Assigning value to $x
echo "x = $x\n";
// $x += 5; // Add and assign
// echo "x += 5: $x\n"; // Outputs: 15
// $x -= 3; // Subtract and assign
// echo "x -= 3: $x\n"; // Outputs: 12
// $x *= 2; // Multiply and assign
// echo "x *= 2: $x\n"; // Outputs: 24
// $x /= 4; // Divide and assign
// echo "x /= 4: $x\n"; // Outputs: 6
// $x %= 5; // Modulus and assign
// echo "x %= 5: $x\n"; // Outputs: 1
$x .= " is the value"; // Concatenate and assign
echo "x .= ' is the value': $x\n"; // Outputs: 10 is the value

?>