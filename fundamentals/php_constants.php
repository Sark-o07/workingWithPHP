<?php
define('PI', 3.14159); // Define a constant for Pi

function myTest() {
    define('E', 2.71828); // Define another constant for Euler's number
    echo "The value of PI is: " . PI . "\n"; // Accessing the constant
    echo "The value of E is: " . E . "\n"; // Accessing the constant defined in the function
    echo "FUNCTION NAME: " . __FUNCTION__ . "\n"; // Outputs the name of the current function
}
// echo "The value of E is: " . E . "\n"; // Accessing the constant defined in the function
// Note: This will cause an error because E is defined inside the function and cannot be accessed
myTest();

// predefined constants in PHP
echo "PHP version: " . PHP_VERSION . "\n"; // Outputs the current PHP version
echo "PHP OS: " . PHP_OS . "\n"; // Outputs the operating system PHP is running on
echo "PHP SAPI: " . PHP_SAPI . "\n"; // Outputs the Server API (SAPI) PHP is using
echo "PHP extension directory: " . PHP_EXTENSION_DIR . "\n"; // Outputs the directory
// where PHP extensions are stored
echo "PHP default timezone: " . date_default_timezone_get() . "\n"; // Outputs
// the default timezone set in PHP
echo "PHP memory limit: " . ini_get('memory_limit') . "\n"; // Outputs the memory limit set in PHP
echo "PHP max execution time: " . ini_get('max_execution_time') . "\n"; // Outputs the maximum execution time for scripts
echo "PHP error reporting level: " . ini_get('error_reporting') . "\n"; // Outputs the current error reporting level
echo "PHP display errors: " . ini_get('display_errors') . "\n"; // Outputs whether errors are displayed
echo "PHP log errors: " . ini_get('log_errors') . "\n"; // Outputs whether errors are logged
echo "PHP upload max filesize: " . ini_get('upload_max_filesize') . "\n"; // Outputs the maximum file upload size
echo "PHP post max size: " . ini_get('post_max_size') . "\n"; // Outputs the maximum size of POST data that PHP will accept
echo "PHP session save path: " . session_save_path() . "\n"; // Outputs the path where session files are saved
echo "FILE DIR: " . __DIR__ . "\n"; // Outputs the directory of the current file
echo "FILE NAME: " . __FILE__ . "\n"; // Outputs the full path
// and filename of the current file
echo "LINE NUMBER: " . __LINE__ . "\n"; // Outputs the current line number in the file
echo "FUNCTION NAME: " . __FUNCTION__ . "\n"; // Outputs the name of the current function
echo "CLASS NAME: " . __CLASS__ . "\n"; // Outputs the name of the current class
echo "METHOD NAME: " . __METHOD__ . "\n"; // Outputs the name of the current method
echo "NAMESPACE: " . __NAMESPACE__ . "\n"; // Outputs the current namespace

echo $_SERVER['PHP_SELF'] . "\n"; // Outputs the filename of the currently executing script
echo $_SERVER['SERVER_NAME'] . "\n";;
echo $_SERVER['HTTP_HOST'] . "\n";;
echo $_SERVER['HTTP_REFERER'] . "\n";
echo $_SERVER['HTTP_USER_AGENT'] . "\n";;
echo $_SERVER['SCRIPT_NAME'] . "\n";;
?>