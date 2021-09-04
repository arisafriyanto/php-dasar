<?php

function foo()
{
    echo "This is Foo! \n";
}


$functionName = "foo";
$functionName();



function bar()
{
    echo "This is bar! \n";
}


$PangillBar = "bar";
$PangillBar();


//  PENGGUNAAN VARIABLE FUNCTION

function sayHello(string $name, $filter) // param 2 function
{
    $finalName = $filter($name);
    echo "$finalName \n";
}

function hurufGede($name): string
{
    return strtoupper($name);
}

sayHello("Aris Afriyanto", "hurufGede");
sayHello("Aris Afriyanto", "strtolower");
