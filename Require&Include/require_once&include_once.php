<?php

// include "Functions.php";
// include "Functions.php";

/*
    kode diatas akan membuat function ulang atau double  jadi tidak boleh

    require_once dan include_once berfungsi untuk mendeteksi jika kita ambil file yang sama berkali kali atau include file yang sama berkali kali
*/

include_once "Functions.php";
include_once "Functions.php";

/*
    cuma sekali file diload

    kode diatas akan melakukan pemanggilan atau mendeklarasikan function menjadi satu kali karena pertama function akan dibuat dan yang kedua function tidak akan dibuat ulang karena sudah dibuat sehingga tidak akan terjadi error function yang double/sudah dideklarasikan
*/

echo sayHello("Aris", "Afriyanto");
