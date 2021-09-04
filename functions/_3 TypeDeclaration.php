<?php

// tipe data didalam parameter

function sayHello(string $name, int $usia)
{
    echo "Hi, $name Saya berumur $usia" . PHP_EOL;
}

// sayHello("Aris Afriyanto", ['usia' => '10']);    gagal karena tidak bisa array masuk sebagai int
sayHello("Adinda", 19);
sayHello(true, false);
sayHello("Aris Afriyanto", "20"); // jika yang dikirim string 20 maka akan dikonversi menjadi int
sayHello("Aris Afriyanto", "dua puluh"); // akan error karena isi string bukan angka
