<?php

echo "Decimal : ";
var_dump(12345); // 10

echo "Octal : ";
var_dump(01234); // 8

echo "Hexadecimal : "; // 16
var_dump(0x1A);

echo "Binary : ";
var_dump(00111); // 2

echo "Underscore di Number : ";
var_dump(1_239_485);

echo "Floating Point : ";
var_dump(1.53);

echo "Floating Point dengan E notation Plus (1.2 x 100): ";
var_dump(1.2e2); // e2 = 100 e3 = 1000

echo "Floating Point dengan E notation Minus (1.2 x 0.001): ";
var_dump(1.2e-3); // e-3 = 0.001

echo "Floating Point dengan Underscore: ";
var_dump(12_821.651);

// Integer Overflow
echo "Integer Overflow 32 bit : ";
var_dump(2147483648); // batas integer 32 bit sistem operasi

echo "Integer Overflow 64 bit : ";
var_dump(9223372036854775807);
// var_dump(9223372036854775808); // batas integer 64 bit sistem operasi ini lebih dan akan jadi floating point
