<?php

// index pertama 0,1,2,3,4,5 makan = index 0

$hoby = ['makan', 'coding', 'turu'];
var_dump($hoby);

echo "\n";
var_dump($hoby[2]);

echo "\n";

$hoby[2] = "belajar";
$hoby[3] = "semangat riss";
var_dump($hoby);
echo "\n";



$pacar = array('one', 'two', 'three', 4);
var_dump($pacar);
echo "\n";
$pacar[] = "five";
var_dump($pacar);
echo "\n";
var_dump(count($pacar));
echo "\n";
echo "\n";


// Array Map
// key dan value
// name => aris

$aris = [
    "name" => "aris",
    "age" => 19
];

var_dump($aris);
// index bisa diubah dengan string bukan number
echo $aris['name'];
echo "\n";



$cupang = array(
    "name" => "ikan cantik",
    "age" => 2
);

var_dump($cupang['name']);
echo "\n";

// array ke dalam array

$afriyan = [
    "name" => "afriyan",
    "usia" => 19,
    "alamat" => [
        "kota" => "Brebes",
        "provinsi" => "Jateng",
        "negara" => "Indonesia"
    ]
];

var_dump($afriyan);
echo "\n";
var_dump($afriyan["alamat"]["negara"]);
