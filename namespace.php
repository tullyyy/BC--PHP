<?php

//  A virtual folder structure for class names, function names and constants

// require_once 'Dog.php';


// $ben = new Dog;

// //FQN for God is \Dog
// //$ben = new \Dog;

// var_dump($ben);







// require_once 'Dog.php';

// namespace executable\index;

// $ben = new Dog;

// //FQN for God is \Dog
// //$ben = new \Dog;

// var_dump($ben);

// //This DOESN'T work because Dog isn't FQN




// namespace tully\day29;

require_once 'Dog.php';

use \tully\day29\Dog as Dog;


$ben = new Dog;

//FQN for God is \Dog
//$ben = new \Dog;

var_dump($ben);

//This DOES work because Dog is now FQN
//BUt this will not work if the Dog class has a namespace


$string = 'Hello, world!';


// function strlen($string)
// {
//   return 999;
// }

var_dump(strlen($string));

