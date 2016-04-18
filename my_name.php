<?php

$names = [
'Niki' ,
'Micha',
'Raj',
'Bobbie',
'Lorena',
];
print_r($names);
echo $names[3];

$student =[
    'first_name' => 'Andrew',
    'last_name' => 'Powel',
];
echo $student['first_name'];

$test = [
    'person1' => [
        'first_name' => 'Andrew',
    ],
    'person2' => [
        'first_name' => 'Melissa',
    ]
];
echo $test['person1']['first_name'];