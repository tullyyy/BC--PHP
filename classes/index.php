<?php

require_once 'User.php';

$jane = new User('jane');
$jane->id = '1';
$jane->surname = 'Fonda';
$jane->username = 'Jane';
$jane->name = 'Janethy';

echo "The name of user {$jane->id} is {$jane->name}.<br>";

$bob = new User('bob');
$bob->id = '2';
$bob->surname = 'Waters';
$bob->username = 'bobby';
$bob->name = 'Robert';

echo "The name of user {$bob->id} is {$bob->name}.<br>";

$jane->dumpMe();
$bob->dumpMe();
// var_dump($steve);