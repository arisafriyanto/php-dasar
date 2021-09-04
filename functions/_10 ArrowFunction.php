<?php

$firstName = "Aris";
$lastName = "Afriyanto";

/*
    arrow function 
    tanpa menggunakan use beda dengan anonymous function

*/


$arrow = fn () => "Nama $firstName $lastName" . PHP_EOL;
echo $arrow();




// anonymous

$anonymous = function () use ($firstName, $lastName) {
    return "Nama $firstName $lastName" . PHP_EOL;
};
echo $anonymous();
