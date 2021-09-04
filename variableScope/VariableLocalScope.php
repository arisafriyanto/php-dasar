<?php

/*
    variable scope adalah dibagian mana saja variable bisa diakses

    ada 3 scope
    - global
    - local
    - static

*/

// GLOBAL SCOPE

function createName()
{
    echo $name = "Aris \n"; // buat variabel local didalam function
}

createName();   // berhasil karena dia akan nampilkan statement createnya

echo $name; // error karena variable hanya bisa diakses dilingkungan function
echo "\n\n";






echo "GLOBAL Keyword\n";

$name = "aris afriyanto"; // global scope

function sayHello()
{
    global $name; // global keyword mengakses variable global didalam function
    echo "Hello $name \n";
}

SayHello();
