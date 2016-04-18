<?php

// var_dump($argv);

$startNum = trim(fgets(STDIN));
$endNum = trim(fgets(STDIN));
$userCount = trim(fgets(STDIN));

if(is_numeric($startNum)){
    echo " {$startNum} is numeric", PHP_EOL;
} else {
    echo " {$startNum} is NOT numeric"; 
}

if (empty($userCount)){
    $userCount = 1;
} 

for ($i=$startNum; $i<=$endNum; $i+=$userCount){
    echo "\$i has the value of {$i}";
}  
