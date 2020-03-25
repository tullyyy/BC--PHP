<?php
class MyArray {

  public $elements = [];

  public function __construct($MyArray)
  {
    $this->element = $MyArray;
  }
}





// You are already familiar with using arrays in PHP.

// Let's use this knowledge to practice OOP.

// Admittedly the result will not be very useful but the point is to practice syntax, not to think about the classes' meaning.

// exercise
// Declare a class
// Declare a class MyArray

// Declare it in a separate file as per PSR standards.

// Create another PHP file and require_once the file with the class' declaration in it. This is the file that you will open in the browser, this is the file in which you will do things.

// exercise
// Properties & constructor
// In the class MyArray declare a public property $elements and give it the default value [] (an empty array).

// Declare a __construct method which will accept one argument: an array.

// The __construct method will take its argument and use it as the new value of its property $elements

// Test it:

// $array1 = new MyArray([
//     'apple',
//     'orange',
//     'peach'
// ]);
 
// var_dump($array1); // the value of property $elements should be ['apple', 'orange', 'peach']
// exercise
// Methods
// Have a look at all the functions that PHP provides for working with arrays: https://www.php.net/manual/en/ref.array.php

// Try to implement some of them as public methods of the class MyArray

// Example:

// PHP provides a function array_sum:

// $sum = array_sum([1, 2, 3]); // 6
// You will make this possible using an object of the class MyArray instead of the array and calling its method:

// $array = new MyArray([1, 2, 3]);
// $sum = $array->sum();
// Don't try to implement the functions perfectly (with all their arguments and options). That would be too much work and beyond your skills. Only go for the most basic functionality.

// In the methods, use the array functions themselves. Don't try to redo all the logic that is already in PHP

// Example implementation of the ->sum() method:

// public function sum()
// {
//     return array_sum($this->elements);
// }
// exercise
// If a function expects an array as its argument, try to use another object of the class MyArray as the argument and not a literal array:

// Example of expected usage of an implementation of array_merge:

// $array1 = new MyArray(['apple', 'orange', 'peach']);
// $array2 = new MyArray(['pear', 'banana']);
 
// $array1->merge($array2);
