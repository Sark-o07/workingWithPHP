<?php
/* PHP strings
Strings in PHP can be defined using single quotes or double quotes.
Single quotes will not parse variables or escape sequences except for \\ and \'. For example:
echo 'This is a backslash: \\ and this is a single quote: \'.';
Double quotes will parse variables and escape sequences like \n, \t, etc.
*/

$strVar = 'Hello, World!'; // Single quoted string

echo strlen($strVar) . "\n"; // Outputs the length of the string

echo str_word_count($strVar) . "\n"; // Outputs the number of words in the string

echo strpos($strVar, "World") . "\n"; // Outputs the character position of the first match "World" in the string if found, otherwise returns false

echo str_replace("World", "PHP", $strVar) . "\n"; // Replaces "World" with "PHP" in the string

echo strtoupper($strVar) . "\n"; // Converts the string to uppercase

$strVar2 = " hello, world! "; // String with leading and trailing spaces
echo trim($strVar2) . "\n"; // Removes leading and trailing spaces

$strVar3 = "hello, world!";
echo ucfirst($strVar3) . "\n"; // Capitalizes the first letter of the string
echo ucwords($strVar3) . "\n"; // Capitalizes the first letter of each word in the string

// convert string to an array
$strArray = explode(", ", $strVar3); // Splits the string into an array
print_r($strArray); // Outputs the array

// String concatenation
$greeting = "Hello";
$name = "John";
$fullGreeting = $greeting . ", " . $name . "!"; // Concatenates strings
echo $fullGreeting . "\n"; // Outputs: Hello, John!

// or
$fullGreeting = "{$greeting}, {$name}!\n"; // Using curly braces for clarity
echo $fullGreeting; // Outputs: Hello, John!

// Using heredoc syntax for multi-line strings
$heredocString = <<<EOD
This is a heredoc string.
It can span multiple lines and supports variable parsing.
Hello, $name!
EOD;
echo $heredocString . "\n"; // Outputs the heredoc string

// Using nowdoc syntax for multi-line strings without variable parsing
$nowdocString = <<<'EOD'
This is a nowdoc string.
It can also span multiple lines but does not parse variables.
Hello, $name! // This will not parse $name, it will output the literal string
EOD;
echo $nowdocString . "\n"; // Outputs the nowdoc string

// String interpolation in double quotes
$interpolatedString = "The value of x is: $strVar"; // Interpolates the variable $strVar into the string
echo $interpolatedString . "\n"; // Outputs: The value of x is: $strVar

// slicing a string
$slicedString = substr($strVar, 0, 5); // Gets the first 5 characters of the string
echo $slicedString . "\n"; // Outputs: Hello

// Checking if a string starts with a specific substring
$startsWithHello = str_starts_with($strVar, "Hello") ? "Yes" : "No";
echo "Does the string start with 'Hello'? $startsWithHello\n";

?>