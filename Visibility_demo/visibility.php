<?php

require_once 'Warehouse.php';

$trainyard = new Warehouse;
$trainyard->name = 'Trainyard Warehouse';
// // the nr_of_crates and the crates are protected because in this case they coincide and will need to be updated in unison. 
// $trainyard->nr_of_crates = 1;
// $trainyard->crates[] = 'Ark of Covenant';

// This function works because it is public.
$trainyard->addCrate('Ark of Covenant');


$docks = new Warehouse;
$docks->name = 'Docks Warehouse';


var_dump($trainyard);
var_dump($docks);