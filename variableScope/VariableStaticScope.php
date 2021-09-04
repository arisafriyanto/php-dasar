<?php

/*
    secara default local variable siklus hidupnya akan hilang jika function sudah dieksekusi atau dideklarasikan, jika function sudah dieksekusi local variable akan hilang selesai

    php punya scope yang bernama static hanya bisa diset local variable

    jika kita menggunakan scope static maka siklus hidup dari local variable ini tidak akan berhenti jika function selesai dieksekusi atau dideklarasikan 
    artinya jadi function itu dieksekusi lagi variable local akan mempunyai value dari variable sebelumnya

*/

// NON STATIC

function increment()
{
    $nilai = 1;
    echo "Variable non static ke-$nilai \n";
    $nilai++;   // tidak akan dieksekusi
}

increment();
increment();
increment();

echo "\n\n";






// STATIC

function incrementStatic()
{
    static $nilai = 1;  // static keyword
    echo "Variable static ke-$nilai \n";
    $nilai++;
}

incrementStatic();
incrementStatic();
incrementStatic();
