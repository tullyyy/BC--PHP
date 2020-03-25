<?php

require_once 'myarray.php';

$array1 = new MyArray([
  'apple',
  'orange',
  'peach'
]);


var_dump($array1); // the value of property $elements should be ['apple', 'orange', 'peach']

