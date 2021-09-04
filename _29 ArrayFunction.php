<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn ($value) => $value * 10, $numbers);

/*
parameter pertama array map adalah callback (callable) function dan  ubah array default kalikan  dengan 2 di parameter 2.
definisi array map adalah mengubah semua data array dengan callback 
*/

var_dump($dataResult); // panggil





$array = [
    "nama" => "aris",
    "usia" => 19,
    "lahir" => "Brebes",
];


var_dump(array_keys($array));   // mengambil semua keys
var_dump(array_values($array)); // mengambil semua values


rsort($numbers);    // desc
var_dump($numbers);

sort($numbers);    // asc
var_dump($numbers);

// menampilkan array secara random
shuffle($numbers);
var_dump($numbers);
