<?php

// ======================================================
// 1. STRING FUNCTIONS
// ======================================================

// strlen() → Counts the number of characters in a string
$name = "Ador";
echo strlen($name);                         // Output: 4
echo "<br><br>";


// str_word_count() → Counts the number of words
$text = "I love PHP programming";
echo str_word_count($text);                 // Output: 4
echo "<br><br>";


// str_contains() → Checks whether a string contains specific text
$text = "I love PHP";

if (str_contains($text, "PHP")) {
    echo "PHP found";                       // Output: PHP found
}
echo "<br><br>";


// strpos() → Finds the position of a word/character
$text = "I love PHP";
echo strpos($text, "PHP");                  // Output: 7
echo "<br><br>";


// strtoupper() → Converts string to uppercase
$name = "hello world";
echo strtoupper($name);                     // Output: HELLO WORLD
echo "<br><br>";


// strtolower() → Converts string to lowercase
$name = "HELLO WORLD";
echo strtolower($name);                     // Output: hello world
echo "<br><br>";


// str_replace() → Replaces text with another text
$text = "I love Java";
echo str_replace("Java", "PHP", $text);     // Output: I love PHP
echo "<br><br>";


// strrev() → Reverses a string
$text = "Hello";
echo strrev($text);                         // Output: olleH
echo "<br><br>";


// trim() → Removes spaces from beginning and end
$name = "   Ador   ";
echo trim($name);                            // Output: Ador
echo "<br><br>";


// explode() → Converts STRING into ARRAY
$text = "Apple,Banana,Mango";
$fruits = explode(",", $text);
print_r($fruits);                            // Output: Array of fruits
echo "<br><br>";


// implode() → Converts ARRAY into STRING
$fruits = ["Apple", "Banana", "Mango"];
$text = implode(",", $fruits);
echo $text;                                  // Output: Apple,Banana,Mango
echo "<br><br>";


// substr() → Extracts a part of a string
$text = "Hello World";
echo substr($text, 0, 5);                    // Output: Hello
echo "<br><br>";


// ======================================================
// 2. NUMBER / DATA TYPE FUNCTIONS
// ======================================================

// is_int() → Checks whether value is an integer
$num = 10;
var_dump(is_int($num));                      // Output: bool(true)
echo "<br><br>";


// is_float() → Checks whether value is a float
$num = 10.5;
var_dump(is_float($num));                    // Output: bool(true)
echo "<br><br>";


// is_nan() → Checks whether value is Not a Number
$num = acos(2);
var_dump(is_nan($num));                      // Output: bool(true)
echo "<br><br>";


// is_numeric() → Checks whether value is numeric
$num = "123";
var_dump(is_numeric($num));                  // Output: bool(true)
echo "<br><br>";


// round() → Rounds a number
$num = 10.6;
echo round($num);                            // Output: 11
echo "<br><br>";


// define() → Creates a constant
define("PI", 3.1416);
echo PI;                                     // Output: 3.1416
echo "<br><br>";


// ======================================================
// 3. DATE AND TIME FUNCTIONS
// ======================================================

// date() → Displays date in a specific format
echo date("d-m-Y");                          // Example: 14-08-2026
echo "<br><br>";


// strtotime() → Converts a date string into timestamp
$date = strtotime("14 August 2026");
echo $date;                                  // Output: Unix timestamp
echo "<br><br>";


// strtotime() + date() → Convert string date and format it
echo date("d-m-Y", strtotime("14 August 2026"));
echo "<br><br>";


// time() → Returns current Unix timestamp
echo time();
echo "<br><br>";


// date_default_timezone_set() → Sets the timezone
date_default_timezone_set("Asia/Dhaka");
echo date("d-m-Y h:i:s A");
echo "<br><br>";


// date_default_timezone_get() → Gets the current timezone
echo date_default_timezone_get();            // Output: Asia/Dhaka
echo "<br><br>";


// ======================================================
// 4. INCLUDE / REQUIRE
// ======================================================

// include() → Includes another PHP file
// Example:
// include("header.php");


// require() → Includes another PHP file
// Example:
// require("config.php");


// NOTE:
// The above two are commented because the external files
// (header.php/config.php) must exist in your folder.


// ======================================================
// 5. JSON FUNCTIONS
// ======================================================

// json_encode() → Converts PHP ARRAY into JSON
$data = [
    "name" => "Ador",
    "age" => 22
];

$json = json_encode($data);

echo $json;                                  // Output: {"name":"Ador","age":22}
echo "<br><br>";


// json_decode() → Converts JSON into PHP ARRAY
$json = '{"name":"Ador","age":22}';

$data = json_decode($json, true);

echo $data["name"];                          // Output: Ador
echo "<br>";
echo $data["age"];                           // Output: 22
echo "<br><br>";


// ======================================================
// 6. ARRAY FUNCTIONS
// ======================================================

// array() → Creates an array
$fruits = array("Apple", "Banana", "Mango");

print_r($fruits);
echo "<br><br>";


// array_keys() → Gets all keys of an array
$student = [
    "name" => "Ador",
    "age" => 22,
    "department" => "CSE"
];

print_r(array_keys($student));               // Output: name, age, department
echo "<br><br>";


// array_merge() → Combines two arrays
$a = ["Apple", "Banana"];
$b = ["Mango", "Orange"];

$result = array_merge($a, $b);

print_r($result);                            // Output: Apple, Banana, Mango, Orange
echo "<br><br>";


// array_push() → Adds an element to the END of an array
$fruits = ["Apple", "Banana"];

array_push($fruits, "Mango");

print_r($fruits);                            // Output: Apple, Banana, Mango
echo "<br><br>";


// array_reverse() → Reverses an array
$numbers = [10, 20, 30, 40];

$result = array_reverse($numbers);

print_r($result);                            // Output: 40, 30, 20, 10
echo "<br><br>";


// sizeof() → Counts array elements
$students = ["Rahim", "Karim", "Ador"];

echo sizeof($students);                      // Output: 3
echo "<br><br>";


// count() → Counts array elements
$students = ["Rahim", "Karim", "Ador"];

echo count($students);                       // Output: 3
echo "<br><br>";


// sort() → Sorts array in ASCENDING order
$numbers = [50, 10, 40, 20, 30];

sort($numbers);

print_r($numbers);                           // Output: 10, 20, 30, 40, 50
echo "<br><br>";

?>