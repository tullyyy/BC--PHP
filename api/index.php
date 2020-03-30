<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('localhost', 'games', 'root', 'rootroot');


// * $results       = select($query, $values);
// * $one_result    = select_one($query, $values);
// * $rows_inserted = insert($query, $values);
// * $rows_updated  = update($query, $values);
// * $rows_deleted  = delete($query, $values);
// * $statement     = statement($query, $values);

$results = select(
  'SELECT *
  FROM `games`
  ORDER BY`{$order_by_column}` `{$order_by_way}`;
  '
, 'Games');

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *'); 

echo json_encode($results);


$order_by_column = 'name';
$order_by_way = 'ASC';

if (isset($GET['orderby'])) {
  $order_by_column = $_GET['orderby'];
}

if (isset($GET['orderby'])) {
  $order_by_way = $_GET['way'];
}