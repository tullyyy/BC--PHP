<!-- Put any function declarations into the file functions.php. It is required by the master index.php file so they will be available to the rest of the code including journey.php. functions.php must not contain any statements that would do something. Only declarations. -->

<?php
function leave_hobbiton($party){
  
  return array_merge($party, [
    'merry' => 'Meriadoc Brandybuck',
    'pippin' => 'Peregrin Took'
  ]);
};

function go_to_bree($party){
  $party['strider'] = 'Strider';
  return $party;
};

function go_to_weathertop($party){
  return array_merge($party, [
    'Witch King of Angmar',
    'Nazgûl #2',
    'Nazgûl #3',
    'Nazgûl #4',
    'Nazgûl #5',
    'Nazgûl #6',
    'Nazgûl #7',
    'Nazgûl #8',
    'Nazgûl #9'
]);
};

function meet_arwen($party){
  $party['arwen'] = 'Arwen Undómiel';
  // return $party;

   array_splice($party, -10, 9);
   return $party;
  
};

  function go_to_rivendell($party){
    unset($party['arwen']);
  
    $party = array_merge($party, [
      'gandalf' => 'Gandalf the Grey',
      'boromir' => 'Boromir',
      'legolas' => 'Legolas',
      'gimli' => 'Gimli'
  ]);
  $party['strider'] = 'Aragorn';
  return $party;
  };

function go_to_moria($party){
  unset($party['gandalf']);
  return $party;
}

function go_to_falls_of_rauros($party){
  $party = array_merge($party, array_fill(0, 1000, 'Orc'));
  unset($party['boromir']);
  return $party;
}

function break_fellowship($party){
  $mordor_party = [];
  $mordor_party['frodo'] = 'Frodo Baggins';
  $mordor_party['sam'] = 'Samwise Gamgee';
  $mordor_party['ring'] = 'The One Ring';


  $hunting_party = [];
  $hunting_party['strider'] = 'Strider';
  $hunting_party['legolas']= 'Legolas';
  $hunting_party['gimli'] = 'Gimli';

  $hungry_party = [];
  $hungry_party = array_diff_key($party, $mordor_party, $hunting_party);

  return [$mordor_party, $hunting_party,$hungry_party];
}

?>