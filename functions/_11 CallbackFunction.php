<?php

// fungsi panggilan balik memanggil function lain didalam parameter function
// callable adalah tipe data parameter yang bersifat parameter tersebut adalah function

function sayHello(string $name, callable $filter)
{
    $finalName = $filter($name);
    // $finalName = call_user_func($filter, $name);
    echo "Hi, i am $finalName" . PHP_EOL;
}

// anonymous function
$anonymous = function ($name): string {
    return strtoupper($name);
};
sayHello("Aris Afriyanto", $anonymous);
echo PHP_EOL;

sayHello("Aris Afriyanto", "strtoupper");


// arrow function
sayHello("Adinda Ayu", fn ($name) => strtolower($name));
