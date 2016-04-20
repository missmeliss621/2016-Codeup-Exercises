<?php


function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n you entered {$b} for b.";
    }
}

// function subtract($a, $b)
// {
//     return $a - $b;
// }

// function multiply($a, $b)
// {
//     return $a*$b;
// }

function divide($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        if($b == 0){
            return "ERROR you attempted to divide by {$b}\n"; 
        } else {
            return $a/$b; 
        }
    } else {
        return "you did not enter a number. {$a} and {$b} were entered.\n";
    }
}
// function modulus($a, $b){
//     return $a % $b;
// }

// echo add(25, 'BeYonce') .PHP_EOL;
// echo subtract(25, 25) .PHP_EOL;
// echo multiply(25, 25) .PHP_EOL;
echo divide('beyonce', 'dinner') .PHP_EOL;
// echo modulus(55, 7) .PHP_EOL;


