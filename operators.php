<!-- Declare a variable $inches and initialize it with the value 12.

Write a piece of code that would convert this value to centimeters and print out the result.

The equation is cm = in * 2.54 -->

<?php 
$inches = 12;

$centimeters = $inches * 2.54;
echo $centimeters;//30.48
echo '<br>';
var_dump($centimeters);//float(30.48)
echo '<br>';

// Exercise
// Declare a variable $celsius and initialize it with the value 100

// Write a piece of code that would convert this value from Celsius to Fahrenheit and print out the result.

// The equation is F = (9/5) * C + 32 
echo '<br>';
$celsius = 100;
$fahr = (9/5) * $celsius + 32;

echo $fahr; //212
echo '<br>';


// <!-- Increment / decrement
// ++
// --
// The incremental and decremental operators change the value of a variable by 1. They can be placed before and after a variable with slightly different results.

// When it is placed before the variable, the variable is first incremented/decremented and then used in it's context.

// When it is placed after the variable, the variable is first used in it's context and only then incremented/decremented.

// exercise (instructed)
// Exercise
// Try running these pieces of code:
echo '<br>';
$number = 0;
$number++;
var_dump($number); //int(1)
echo '<br>';

$number = 0;
var_dump($number++); //int(0)
echo '<br>';

$number = 0;
var_dump(++$number); //int(1)
echo '<br>';

// ternary operator
// Syntax:

// expression ? value_if_true : value_if_false 

// ternary operator example
// $message = null;

// if($age > 18){
//   $message = 'Ok, you can enter';
// }else{
//   $message = 'You are too young';
// }

// $message = $age > 18 ? 'Ok, you can enter' : 'You are too young';

// Example:

// $owns_a_car = false;
 
// $vehicle = $owns_a_car ? 'car' : 'bicycle';
// exercise (instructed)
// Exercise
// Declare a variable $temperature and initialize it's value to 36.5

// Write a piece of code that would check if the number inside a variable is higher than 37 and print out 'ill' or 'healthy' using the ternary operator.


$temperature = 36.5;
$status = $temperature > 37 ? 'ill' : 'healthy';

echo '<br>';
echo $status;
echo '<br>';

// Declare a variable $number and initalize it's value to 42

// Write a piece of code that would check if a number inside a variable is even or odd and print out 'even' or 'odd' based on the result using the ternary operator.

$number = 42;
$number_check = $number % 2 == 0 ? 'even' : 'odd';
echo '<br>';
echo $number_check;
echo '<br>';

// Concatenation
// One of the most important functions of PHP is to output strings. Therefore it is often necessary to put two (or more) strings together to make a longer string.

// This can be done with the concatenation operator - the dot .

// $full_name = 'Bruce' . ' Wayne';
// echo $full_name; // 'Bruce Wayne'
// It can be used with any literal value that can be converted to string and with variables:

// $first_name = 'Bruce';
// $surname = 'Wayne';
// $year = 1939;
 
// echo $first_name . ' ' . $surname . ' was first introduced in ' . $year;

// Create a variable $weekday and initialize it with the name of today (monday, tuesday, etc.)

// Print out a sentence that would say for example 'Today is Monday' using the created variable and concatenation.

$weekday = 'Thursday';
echo 'Today is ' . $weekday;
echo '<br>';


// Create variables $year_of_birth and initialize it with the year you were born and $this_year and initialize it with the current year.

// Print out a sentence that would say for example 'I was born in 1990 so this year I am celebrating my 28. birthday' */


$year_of_birth = 1991;
$this_year = 2020;

echo 'I was born in ' . $year_of_birth . ' so this year I celebrated ' . ($this_year - $year_of_birth) . '. birthday'



 ?>