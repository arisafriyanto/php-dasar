<?php

/*
    variable scope adalah dibagian mana saja variable bisa diakses

    ada 3 scope
    - global
    - local
    - static

*/

// GLOBAL SCOPE

$name = "aris afriyanto"; // global scope

function sayName()
{
    echo $name; // error
}

SayName();
