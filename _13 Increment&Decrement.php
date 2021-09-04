<?php

// Increment dan Decrement
// Preincrement dan Postincrement
// sebelum          sesudah

$a = 5;
$b = 5;

//postincrement = diprint dulu baru ditambahkan
var_dump($a);
// $a = $a + 1;
var_dump($a++);
var_dump($a);

echo "\n";

// preincrement = ditambahkan dulu baru diprint
var_dump($b);
// $b = 1 + $b;
var_dump(++$b);
var_dump($b);
