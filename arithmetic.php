<?php


function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a*$b;
}

function divide($a, $b)
{
    return $a/$b;
}
function modulus($a, $b){
    return $a % $b;
}

echo add(25, 25) .PHP_EOL;
echo subtract(25, 25) .PHP_EOL;
echo multiply(25, 25) .PHP_EOL;
echo divide(25, 25) .PHP_EOL;
echo modulus(55, 7) .PHP_EOL;


