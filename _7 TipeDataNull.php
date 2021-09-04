<?php

$nama = "aris";
$nama = null;

$age = NULL;

echo "Name : " . $nama;
echo "\n";
echo "Age" . $age;
echo "\n";

echo "Is name null ? : ";
var_dump(is_null($nama));
echo "\n";


// hapus variable

$cth = "afriyan";
unset($cth); //     hapus variable
var_dump(isset($cth));
