<?php
$cars_i_want = [];
$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";
$cars_i_want[] = "Skoda";

var_dump($cars_i_want);

echo '<br>For myself I would buy ' . $cars_i_want[1] . ".<br>";
echo 'For my spouse I would buy ' . $cars_i_want[3] . ".<br>";


$cars_i_want[4] = 'Smart Car';

echo 'For my kids I would buy ' . $cars_i_want[4] . ".<br>";

echo '<ul>';
foreach($cars_i_want as $cars){
  echo '<li>' . $cars . "</li>";
};
echo '</ul>';

$car_prices = [
  'Skoda Octavia' => 270000,
  'Volkswagen Golf' => 170000,
  'BMW X6' => 380000,
  'Porsche 911' => 1150000
];

echo 'You can have a Porsche 911 for just ' . $car_prices['Porsche 911'] . ' CZK.<br>';

foreach($car_prices as $car_names => $car_cost){
 echo 'The price of ' . $car_names . ' is '. $car_cost .' CZK.<br>';
}

?>