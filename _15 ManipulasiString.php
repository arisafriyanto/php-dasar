<?php

$nama = "Aris";

echo $nama . " Afriyanto" . PHP_EOL;
echo "Usia " . 19.5 . PHP_EOL;


$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"salah";
var_dump($valueInt);

$valueFloat = (float)"10.3";
var_dump($valueFloat);


$pacar = "Angel";
echo $pacar[0] . PHP_EOL;
echo $pacar[1] . PHP_EOL;
echo $pacar[2] . PHP_EOL;
echo $pacar[3] . PHP_EOL;
echo $pacar[4] . PHP_EOL;


echo "Pacar saya adalah $pacar \n";

echo "Hello {$pacar}'s \n";
