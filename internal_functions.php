<?php

// TODO: Create your inspect() function here
function inspect ($placeHolder) {
    if (is_string($placeHolder)) {
        return "this is a string with the value {$placeHolder}\n";
    } elseif (is_bool($placeHolder)) {
        return "this is a boolean that is {$placeHolder}\n";
    } elseif (is_array($placeHolder)) {
        return "this is an array\n";
    } elseif (is_int($placeHolder)) {
        return "this is a number that is {$placeHolder}\n";
    } elseif (is_null($placeHolder)) {
        return "this is null {$placeHolder} \n";
    } elseif (is_float($placeHolder)) {
        return "this has a decimal so its a float {$placeHolder}\n";
    }
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

echo inspect($string1);
echo inspect($string2);
echo inspect($bool1);
echo inspect($bool2);
echo inspect($num1);
echo inspect($num2);
echo inspect($num3);
echo inspect($num4);
echo inspect($null);
// echo inspect($array1);

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;


echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
