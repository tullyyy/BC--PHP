<!-- Anything that happens, any changes to the variable $party, do in the journey.php file -->
<?php
$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

if ($_GET[ 'step'] > 0){
  $party['gandalf'] = 'Gandalf the Grey';
}

if ($_GET[ 'step'] > 1){
  unset($party['bilbo']);
}

if ($_GET[ 'step'] > 2){
  $party['sam'] = 'Samwise Gamgee';
}

if ($_GET[ 'step'] > 3){
  $party['sam'] = 'Sam';
}

if ($_GET[ 'step'] > 4){
  unset($party['gandalf']);
}

if ($_GET[ 'step'] > 9){
  $party = leave_hobbiton($party);
}

if ($_GET[ 'step'] > 10){
  $party = go_to_bree($party);
}

if ($_GET[ 'step'] > 11){
  $party = go_to_weathertop($party);
}

if ($_GET[ 'step'] > 12){
  $party = meet_arwen($party);
}

if ($_GET[ 'step'] > 13){
  $party = go_to_rivendell($party);
}

if ($_GET[ 'step'] > 14){
  $party = go_to_moria($party);
}

if ($_GET[ 'step'] > 15){
  $party = go_to_falls_of_rauros($party);
}

if ($_GET[ 'step'] > 16){
  $parties = break_fellowship($party);
}

var_dump($parties);


?>