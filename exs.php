<?php

// Declare a variable $my_name and initialize it with a string value containing your name.

// Declare a variable $height and initialize it with an decimal representation of your height (1.8 metres, 6.2 feet)

// Use var_dump to output both of the variables separately. Observe their data types.

$my_name = 'Tully';
$height = '1.68m';

var_dump($my_name);
echo '<br>';
var_dump($height);
echo '<br>';
echo '<br>';

// Functions #1
// Declare a PHP function headline that would accept one argument $text and it would print out a <h1> headline with the text as it's content.

// For example calling headline('My website') should yield <h1>My website</h1>

function headline($text){
 echo '<h1>' . $text . '</h1>';
};

echo headline('My website');
echo '<br>';
echo '<br>';
// Functions #2
// Modify the previous function so that it returns the resulting string instead of just printing it.

// Test it by calling echo headline('My website');

// exercise
// Functions #3
// Declare a variable $inches and initialize it with the value 12.

// Write a function inchesToCentimeters that would accept one argument:

// number of inches
// Inside the function convert the number of inches to centimeters and return the result.

// The equation is cm = in * 2.54

// Call the function using the variable $inches as argument.

$inches = 12;

function inchesToCentimeters($inches) {
  echo $inches * 2.54;
};

echo inchesToCentimeters(100);
echo '<br>';
echo '<br>';
// exercise
// Functions #4
// Declare a variable $celsius and initialize it with the value 100

// Write a function celsiusToFahrenheit that would accept one argument:

// temperature in celsius
// Inside the function convert the temperature from Celsius to Fahrenheit and return the result.

// The equation is F = (9/5) * C + 32

// Call the function using the variable $celsius as argument.

$celsius = 100;
 function celsiusToFahrenheit($celsius){
   echo (9/5) * $celsius + 32;
 };

 echo celsiusToFahrenheit(32);
 echo '<br>';
 echo '<br>';

//  Conditions #1
// Declare a variable $temperature and initialize it's value to 36.5

// Write a function isHealthy that would accept two arguments:

// temperature in celsius OR fahrenheit
// the string 'c' or 'f' denoting the units for the first argument
// Inside the function write a condition that would convert the first argument from Fahrenheit to Celsius if the second argument is 'f'

// Then it would check the resulting temperature in Celsius against number 37 and return either true if the temperature is lower or false otherwise.

// Call the function using the variable $temperature as argument.

$temperature = 36.5;
function isHealthy($temperature, $tempUnit){
  if ($tempUnit = 'f'){
    $temperature = ($temperature - 32) * 5/9;
    if ($temperature < 37){
      echo 'true';
    } else {
      echo 'false';
    }
  }
};

echo isHealthy(36.5,'f');
echo '<br>';
echo '<br>';
// exercise
// Ternary operator
// Declare a variable $number and initalize it's value to 42

// Write a function evenOrOdd that would accept one argument:

// a number
// Inside the function check whether the number is even or odd and return either the string 'even' or the string 'odd'.

// The code inside the function will be just 1 line and it is mandatory to use the ternary operator.

// Call the function using the variable $number as argument.

$number = 43;

function evenOrOdd($number){
 echo ($number % 2 == 0) ? 'Even' : 'Odd';
};

echo evenOrOdd($number);

echo '<br>';
echo '<br>';
// exercise
// Concatenation #1
// Create a variable $weekday and initialize it with the name of today ('Monday', 'Tuesday', etc.)

// Write a function sayWeekday that will accept one argument:

// name of a day
// The function will echo a sentence that would say for example 'Today is Monday' using the argument and concatenation.

// Call the function using the variable $weekday as argument.

$weekday = 'Friday';

function sayWeekday($weekday){
  echo 'Today is ' . $weekday;
};

echo sayWeekday($weekday);
echo '<br>';
echo '<br>';
// exercise
// Concatenation #2
// Create a variable $year_of_birth and initialize it with the year you were born.

// Write a function sayBirthday that will accept one argument:

// the year of birth.
// Inside the function declare another variable $this_year and initialize it with the current year (hardcode it or use date('Y')).

// Then the function will echo a sentence that would say for example 'I was born in 1990 so this year I am celebrating my 29. birthday', calculating the number by subtracting the two years.

// Call the function using the variable $year_of_birth as argument.

$year_of_birth = 1991;
function sayBirthday($year_of_birth){
  $this_year = 2020;
  echo 'I was born in ' . $year_of_birth . ' so this year I celebrated my ' . ($this_year - $year_of_birth) . ' birthday';
};

echo sayBirthday($year_of_birth);
echo '<br>';
echo '<br>';
// exercise
// Conditions
// Write a function assessHeight that will accept one argument:

// height in centimeters.
// Inside the function write a condition that would return the word 'tall' if a person's height (in a variable) is 180 or more, 'average' when its less than 180 but at least 160 and 'small' if it's under 160.

// Call the function using your own height as argument.


function assessHeight($heightCms){
if ($heightCms > 180){
  echo 'tall';
}elseif ($heightCms > 160 && $heightCms < 180){
  echo 'average';
}else{
echo 'small';
}
};

echo assessHeight(168);
echo '<br>';
echo '<br>';

// Switch
// Write a function getLanguageUsage that will accept one argument:

// a string with a lowercase name of a programming language
// Inside the function use the switch control structure on the argument to do one of the following things:

// return the string 'serverside' if the value is 'php', 'python' or 'ruby'
// return the string 'clientside' if the value is 'javascript'
// return the string 'i don\'t know' for anything else
// Call the function using some of these values: 'php', 'python', 'ruby', 'javascript', 'node'.

function getLanguageUsage($language){
  $language = strtolower($language);

switch($language){
  case 'php':
  case 'python':
  case 'ruby':
    echo 'serverside';
  break;
  case 'javascript':
    echo 'clientside';
  break;
  default: 
    echo 'I don\'t know';
}
}

echo getLanguageUsage('javascript');
echo '<br>';
echo '<br>';

// exercise
// PHP.net
// Research the PHP function strtolower and strtoupper.

// Use it in the previous exercise so that it returns the correct result on all these occasions:

echo getLanguageUsage('PHP');echo '<br>';
echo getLanguageUsage('php');echo '<br>';
echo getLanguageUsage('Php');echo '<br>';
echo getLanguageUsage('javascript');echo '<br>';
echo getLanguageUsage('JavaScript'); echo '<br>';


// exercise
// Logical operators
// We have these variables:

// $age (integer)
// $gender (string)
// $employed (boolean)
// Write conditions representing these sentences:

// if the age is less than 25
// if employed
// if age is above 34 and not employed
// if the age is not greater than 18
// if the age is lower than 12 and gender is female
// if age is greater or equal to 18 and is not employed
// if age is greater or equal to 60, is employed and is a female
// if (someone) is a male above 20 or is an unemployed female above 25
// Don't worry about the code inside the condition.


// $age = 26;
// $gender = 'm';
// $employed = false;

// // Solution to 1.:
// if ($age < 25) {
 
// }

// // Solution to 2.:
// if ($employed) {
 
// }

// // Solution to 3.:
// if ($age > 34 && $employed) {
 
// }

// // Solution to 4.:
// if ($age < 12 && $gender === 'female') {
 
// }

// // Solution to 5.:
// if ($age >= 18 && !$employed) {
 
// }

// // Solution to 6.:
// if ($age >= 60 && $employed && $gender === 'female') {
 
// }

// // Solution to 7.:
// if ($age > 20 || !$employed && $gender === 'female' $age > 25) {
 
// }
?>