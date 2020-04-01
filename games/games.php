<?php
//require the library that allows to make database connections and run queries
require_once 'DB.php';


//connect to the database
DB::connect('localhost', 'games', 'root', 'rootroot');


//Select everything from games

$select_games_query = 
"SELECT `games`.*
FROM `games`
";

$games = DB::select($select_games_query);


// In PHP prepare ids of games as an array:
//go through all the selected games and grab their IDs 
// making an array of IDs
$game_ids = [];                           // array of game IDs, initialized as empty array
foreach ($games as $game) {               // loop through the games
    $game_ids[] = $game->id;              // in the new empty array, we will add a new element on each loop
}                                // add the id property of the current $game as the next element of the array $game_ids
// var_dump($game_ids);


// // (If using plain PHP) prepare a list of n question marks where n is the number of game ids. For example '?, ?, ?, ?, ?' for 5 game ids:
// // making a string of '?, ?, ?' with the correct number of question marks
$qmarks = join(', ', array_fill(0, count($game_ids), '?'));
// count() counts the number of elements in an array 
// array_fill() will generate an array and takes three arguments: the starting index, how many elements, and what value they will have 
// join() the first argument is a delimiter (ie comma and space), the second argument is an array of strings that will be joined with the first argument between each


// //Use the question marks and the game ids to execute a query using IN:
// //use the ?,?,? string and thr array of IDs to select all the genres for the games and select them
$select_genres_query = 
"SELECT `game_genre`.`game_id`, `genres`.*
FROM `game_genre`
LEFT JOIN `genres`
ON `game_genre`.`genre_id` = `genres`.`id`
WHERE `game_genre`.`game_id` IN ({$qmarks});
";
// var_dump($select_genres_query);

$genres = DB::select($select_genres_query, $game_ids);
// $select_genres_query is a query containing 6 question marks and $game_ids is an array of 6 elements.
// var_dump($genres);

// // Create a multidimensional array of genres indexed by their game ids.
// //loop through the selected genres and create another array 
// // in which the genres will be indexed by the fame IDs (for easier access to the right genres for a specific game)
$genres_for_games = [];
foreach ($genres as $genre) {
    $genres_for_games[$genre->game_id][] = $genre;
}
// var_dump($genres_for_games);

// // In your output (preparing a JSON response, generating HTML...), loop trough games and for each one get the appropriate genres:
// // be able to output them together, easily
foreach ($games as $game) {
    $game->genres = $genres_for_games[$genre->game_id];
}
header('Content-type: application/json');
echo json_encode($games);