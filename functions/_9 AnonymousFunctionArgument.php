<?php

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye, $finalName" . PHP_EOL;
}


// anonymous atau closure function,    memasukan function ke variable
$goodBye = function ($name): string {
    return strtolower($name);
};
sayGoodBye("Aris Afriyanto", $goodBye);


// arrow function
$bye = fn ($name) =>  strtoupper($name);
sayGoodBye("Aris Afriyanto", $bye);



echo PHP_EOL;
// echo "\nMengakses variable diluar closure/diluar anonymous function\n";

$jk = "Laki - laki";

$gender = function () use ($jk) {
    return "Aku $jk" . PHP_EOL;
};

echo $gender();
