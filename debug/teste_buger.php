<?php 

$string = "Rhyan Lucca Borges Galdino";

$nick = explode(' ', $string);

// $nick = array_key_first($string) . array_key_last($string);

print_r($nick);

// echo str_shuffle($nick[0]);

$nick = $nick[0] . " " . end($nick);

echo $nick;

?>
