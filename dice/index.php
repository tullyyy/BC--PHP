<?php

require_once 'Dice.php';
use tully\day29\dice\Dice;


$nr_of_dice = $_POST['dice-number'];

$dice = [];
if (isset($_POST["number"])){
for ($i=0; $i < $nr_of_dice; $i++){
  $dice[] = new Dice;
  // echo $dice->roll();
  var_dump($dice);  
}} else {
  echo "Write something";
}

var_dump($dice);
// echo $dice->roll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="post">
<input type="number" name="dice-number" id="">

<select name="dice-sides" id="">
<option value="4">4</option>
<option value="6">6</option>
<option value="8">8</option>
<option value="10">10</option>
<option value="12">12</option>
<option value="20">20</option>
</select>

<input type="submit" value="Submit the form">
</form>

</body>
</html>

