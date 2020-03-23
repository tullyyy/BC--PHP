<h1>While to Christmas</h1>
<?php 
// while (expression) {
//     // code to run again and again as long as the expression == true
// }
$days_to_christmas = 315;

// while($days_to_christmas > 0){
//   echo 'There are still ' . $days_to_christmas . ' days until Christmas' . '<br>';
//   $days_to_christmas--;
// };
// echo 'Hooray! It\'s Christmas!' . '<br>';

// this while loop is good when you are unsure of how many lines of iteration there will be and you can parse each one. 
// The expression is tested before the code is run.


// do {
//   // code to run again and again as long as the expression == true, but at least once
// } while (expression);

// the code is run, then the while is evaluated to be true or false and will run again if true. This loop always runs at least once.

// do{
//   echo 'There are still ' . $days_to_christmas . ' days until Christmas' . '<br>';
//   $days_to_christmas--;
// } while($days_to_christmas > 0);

// echo 'Hooray! It\'s Christmas!' . '<br>';



// for (initialization statement; expression; change statement) {
//   // code to run as long as the expression == true
//   // after each loop, change statement is executed
// }

// for ($number = 0; $number < 10; $number++) {
//   // code to run as long as number is < 10, i.e. 10 times
// }
// The $number in this exercise is called an iterator.

// Traditional names for iterators are $i and $j (to be used when $i is already in use).

// for($days_to_christmas = 315; $days_to_christmas > 0; $days_to_christmas--){
//   echo 'There are still ' . $days_to_christmas . ' days until Christmas' . '<br>';
// };




// Loops can be interrupted with the break; command.
// for ($number = 0; $number < 10; $number++) {
//     if ($number == 5) {
//         break; // will stop the loop when $number reaches 5
//     }
// }


// // Iterations can be skipped with the continue; command.
// // This will prevent the rest of the code within the loop to run in this iteration.
// for ($number = 0; $number < 10; $number++) {
//     if ($number < 5) {
//         continue; // this will end the current iteration and continue to the next
//     }
 
//     // code here will run only when $number >= 5
// }

echo '<h1>Odd digits</h1>';
for($i = 0; $i <10; $i++){ //this will put out every digit between 0 and 10 
  if($i % 2 == 0) continue; // this will exclude all even numbers
  echo $i . '<br>';
}


echo '<h1>Odd digits until sum is smaller than five</h1>';
$sum = 0;

for($i = 0; $i <10; $i++){ 
  if($i % 2 == 0) continue; // this will exclude all even numbers
  if ($sum > 5) break;
  $sum +=$i; //each value is added to sum

  echo $i . '<br>';
}

echo '<h1>Foreach</h1>';

$array = [1,2,3,4];
foreach($array as $value){
  echo $value . '<br>';
}

echo '<h1>Foreach with indices</h1>';

foreach($array as $key => $value){
  echo $key . ':' . $value . '<br>';
}
?>
