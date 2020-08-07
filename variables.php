<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Single line comment
# Single line comment

/* 

 Multiline 
 comment

*/

// echo 'Hello World';
// print 'Hello World';

#VARIABLES
/*

    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers, and underscores
    - Case sensitive
*/

#DATA TYPES
/*
    String 
    Integeres
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
*/

$output = "Hello World";
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = "World";
$greeting = $string1 . ' ' . $string2 . '!';
$greeting2 = "$string1 $string2";

$string3 = 'They\'re Here';

$float1 = 4.4;
$bool1 = true;

define('greeting', 'Hello Everyone');

echo greeting; 
?>

