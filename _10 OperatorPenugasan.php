<?php

$a = 100;
$b = 5;

$tambah = $a += $b;
var_dump($tambah);

$total = 0;

$buah = 1000;
$ayam = 20000;
$diskon = 3000;

$total += $buah; // sama dengan
$total = $total + $ayam; // ini
$total -= $diskon;

var_dump($total);
