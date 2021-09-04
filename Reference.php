<?php

/*
    adalah mengakses variable yang sama dengan nama variable yang berbeda tetapi isinya sama

    utk membuat reference terhadap variable, kita bisa menggunakan karakter &

    Assign by reference
    membuat beberapa variable menuju file yang sama
*/

// reference variable

$name = "Aris";

$ubahName = &$name; // membuat shortcut / alias ke name
$ubahName = "Angelia";

echo "Hello $name\n";


echo "\nNon reference\n";

$aran = "Aris";

$ubahAran = $aran;  // copy isi dari aran, jadi ketika diakses aran dia akan tetap tidak berubah
$ubahAran = "Angelia";

echo "Hello $aran\n\n";


// reference parameter

echo "Non reference\n";

function increment(int $value)
{
    $value++;
}

$counter = 1;
increment($counter);    // value/nilai yang dikirim counter bernilai 0 tambah 1 = 1
echo $counter . PHP_EOL;


echo "\nDengan reference\n";

function incrementReference(int &$value)
{
    $value++;
}

$counter = 1;           // mengirim variable atau reference ke aslinya counter 1 ditambah 1
incrementReference($counter);
echo "$counter \n\n";


// reference return
echo "Non reference\n";

function getValues()
{
    static $value = 100;
    return $value;
}

$a = getValues();
$a = 200;

$b = getValues();

echo "$b\n";


echo "reference return\n";
// tidak disarankan karena akan membuat bingung

function &getValuesReference()
{
    static $value = 100;
    return $value;
}

$a = &getValuesReference();
$a = 200;

$b = &getValuesReference();

echo "$b\n";
