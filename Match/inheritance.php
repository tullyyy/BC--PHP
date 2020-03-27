<?php



require_once 'Match.php';

$match = new Match;

var_dump($match);

echo $match->getEstimatedEnd();


$football_match = new FootballMatch('2020-02-19 12:03:00');