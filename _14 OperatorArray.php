<?php

$first = [
    "first_name" => "aris"
];

$last = [
    "first_name" => "budi",
    "last_name" => "afriyan"
];

$full = $first + $last;
var_dump($full);





$a = [
    "first_name" => "budi",
    "last_name" => "afriyan"
];

$b = [
    "last_name" => "afriyan",
    "first_name" => "budi",
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
