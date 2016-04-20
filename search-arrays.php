<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function nameFound($person, $names) {
    $result = array_search($person, $names);
    if ($result !== false) {
        return True;
    } else{
        return False;
    }

}

echo nameFound('Tina', $names) .PHP_EOL;
echo nameFound('Bob', $names) .PHP_EOL;

// $result = array_search($names, $compare);

// function comparing($a, $b) {
//     // counter of things they have in common
//     foreach($a as $stuff) {
//         // if stuff is in b, increment counter
//     } 
//     // return the counter
// }

// var_dump(comparing($names, $compare));


// $stuff = ['a', 'c', 'qq'];
// $junk  = ['a', 'qq', 't', 9];

var_dump(comparing($stuff, $junk));
