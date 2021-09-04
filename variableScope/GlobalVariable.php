<?php

/*
    global variable adalah variable yang bisa diakses dimanapun superglobal. jadi setiap variable yang dibuat di global scope akan masuk ke array $GLOBALS di php.

    jika kita akses name akan masuk ke globals variable

    $name = "Aris Afriyanto";
    var_dump($GLOBALS);

    secara otomatis  akan dimasukkan oleh php
    $GLOBALS["name"] = "Aris Afriyanto";        superglobal

*/


$name = "Aris Afriyanto";

function sayHello()
{
    // global $name; // global keyword mengakses variable global didalam function
    $name = $GLOBALS['name']; // superglobal scope
    echo "Hello $name \n";
}

SayHello();

// var_dump($GLOBALS); 
