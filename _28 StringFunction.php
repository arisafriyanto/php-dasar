<?php

$array = ["aku", "cinta", "kamu"];
$string = "aku benci kamu";
$numbers = [10, 30, 30, 40];

// implode
$implode = implode(" ", $array);
var_dump($implode);

// join
$join = join(",", $numbers);
var_dump($join);

// explode
$explode = explode(" ", $string);
var_dump($explode);

// trim

// $trim = "      Aku         ";
$trim = trim("      Aku         "); // hapus sepasi depan belakang
var_dump($trim);


// substr
$substr = substr($string, 4, 5);
var_dump($substr);
