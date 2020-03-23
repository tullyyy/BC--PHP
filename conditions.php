<?php

// if (expression) {
//   // code to run when condition == true
// } else {
//   // code to run when condition == false
// }





// if (expression) {
//   // code to run when expression == true
// } elseif(other_expression) {
//   // code to run when other_expression == true
// } else {
//   // code to run when both expression == false and other_expression == false
// }




// switch (expression) {
//   case value_1:
//       // code to run when value == value_1
//       break; // mandatory
//   case value_2:
//       // code to run when value == value_2
//       break;
//   case value_3:
//       // code to run when value == value_3
//       break;

//   // ...

//   default:
//       // code to run when none of the previous conditions are true
//       break;
// }


// instead of this:
$content = 'home';

// if(content == 'home') {
//   echo 'Homepage';
// }elseif($content == 'contact'){
//   echo 'Contact';
// }else{
//   echo 'Not found';
// }

// switch statements do this:
switch ($content){
  case 'home':
    echo 'Homepage';
  break;
  case 'contact':
    echo 'Contact';
  break;
  default: 
    echo 'Not found';
}

echo '<br>';
echo '<br>';
// $array = [1,2,3]; //user provided only three of four inputs

// if($array[3] > 13) {

// }

$array = [
  'name' => 'John',
  'surname' => 'Doe',
  'email' => 'john.doe@gmail.com',
  ]; //user provided only three of four inputs

// if($array['age'] > 13) {
//   echo 'Yes, you can register';
// }else{
//   echo 'You are too young';
// }

// add code so that code is only run if age input is provided, otherwise it's ignored
if(isset($array['age']) && $array['age'] > 13) {
  echo 'Yes, you can register';
}else{
  echo 'You are too young or you didn\'t provide an age';
}
echo '<br>';

if(!isset($array['age'])) {
  echo 'you didn\'t provide an age';
}