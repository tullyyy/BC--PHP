<!-- Declare these variables and initialize them with values:

first_name - holds your first name
surname - holds your surname
Now print them out in the following way:

First name: Bruce<br>
Surname: Wayne

Declare these variables and initialize them with values:

year_of_birth - holds the year of your birth
height - holds your height (cm or in, does not matter)
Now print them out in the following way:

Year of birth: 1939<br>
Height: 186
exercise
Define a constant SERVER_SOFTWARE with the name of your server software ('Apache').

Then use it in a sentence to print text like:

This server is running on Apache.
exercise
Define a constant MY_OS with the name of your operating system (e.g. 'Windows').

Then use it in a sentence to print text like:

My operating system is Windows.
exercise
Declare a PHP function greet that will take no arguments and just print out (echo) the greeting Hello, world!

exercise
Modify the previous function so that it accepts one argument named $whom and use it's value to decide whom to greet.

For example calling greet('Prague') should print (echo) Hello, Prague!

exercise
Modify the previous function so that it returns the resulting string instead of printing it.

To see the return value you have to print (echo) it after you call the function:

echo greet('Prague'); -->


<?php
$first_name = 'Sarah';
$surname = 'Tully';

echo 'First name: ' . $first_name . '<br>Surname: ' . $surname . '<br>';

$year_of_birth = '1991';
$height = '5ft 6in';

echo 'Year of birth: ' . $year_of_birth . '<br>Height: ' . $height . '<br>';

define('SERVER_SOFTWARE', 'Apache');
echo 'This server is running on ' . SERVER_SOFTWARE . '.<br>';

define('MY_OS', 'MacOS');
echo 'My operating system is ' . MY_OS . '.<br>';

function greet($whom)
{
    echo 'Hello, ' . $whom . '!';
}

echo greet('Prague')

?>
