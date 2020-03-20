<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Meow</h1>

<?php
    echo 'Hello World! 1 '; 
?>
<br>
<?php echo 'Hello World! 2 '; ?>
<br>
<?= 'Hello World! 3 ' ?>
<br>
<?php
    $a = 'Nemo';
    echo $a;
    echo '<br>';
    echo 'Hello ' . $a . '!';
    echo '<br>';

    // function greeting() {
    //   echo 'Hiya, how are you?';
    // }

    // greeting();
    // echo '<br>';
    // function greet($name) {
    //   echo 'hello ' . $name . ' are you an alien?';
    // }

    // greet('Bob');

    //one line
    /* big boy 
    comment */

function greeting($name)
{
  return '<p>Hello ' . $name . ' from my first function!</p>';
// echo '<p>Hello ' . $name . ' from my first function!</p>';'
}

    $greet = greeting('Nemo');
    echo $greet;
?>

<?php

function mySpecialRound($n) {
  $n = intval($n);
  return $n;
}

$number = 123.4;

$number = mySpecialRound($number);

echo mySpecialRound($number);
echo $number; 
?>

  </body>
</html>
