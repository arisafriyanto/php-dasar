<?php


function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Aris Afriyanto");
echo PHP_EOL;



// default argument

function hello($name = "Anonymous", $usia = 18)
{
    echo "Hi, $name Usia saya $usia" . PHP_EOL;
}

hello("Adinda", 20);
hello("Rivana", 19);
hello();
echo PHP_EOL;


// default function diawal doang gk akan berguna karena jika kita panggil function parameter pertama tetap argument pertama dan ke dua tetap kedua  Direkomendasikan kalo bikin default argument di argumen belakang

// Ini salah gagal

// function hello2($name = "Anonymous", $usia)     ini salah
function hello2($name, $usia = 20)
{
    echo "Hi, $name Saya berumur $usia" . PHP_EOL;
}

// hello2(20); // parameter pertama masuk ke pertama harus ada 2 parameter berarti
hello2("Adinda Ayu");
hello2("Eko", 20);
