<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';
require_once 'Region.php';

connect('localhost', 'world', 'root', 'rootroot');

$results = select(
'SELECT *
FROM `country`
WHERE `population` > ?
ORDER BY `population` DESC
LIMIT 10', 
[20000000], 'Country');

// binding 20000000 as a value to replace the ?, they are safely put together later when they arrive in the browser.

// echo json_encode($results);
// var_dump($results);

function get_cities_page($page_nr)
{
  $offset = ($page_nr - 1) * 20;
return select(
"SELECT * 
FROM `city`
ORDER BY `population` DESC
LIMIT {$offset}, 20
");
}

$cities = get_cities_page(1); // first 20
// $cities = get_cities_page(2); // second 20
// $cities = get_cities_page(3); // third 20
// var_dump($cities);
// -- Write a PHP function that would take one argument $page_nr and prepare a SQL query that would select records from the city table for one page of a list, where each page has 20 items and the parameter $page_nr is the number of the page.

$region = new Region;
// $region->name = 'Central Africa';
// $region->slug = 'central-africa';
// var_dump($region);
// $region->insert();
// var_dump($region);


// $north_america = select_one("SELECT * FROM `Region` WHERE `name` = ?", ['North America'], 'Region');
// $north_america->slug = 'USA';
// var_dump($north_america);
// $north_america->update();
// $north_america->save();

$region = select_one("SELECT * FROM `Region` WHERE `id` = ?", [2], 'Region');
$region->delete();