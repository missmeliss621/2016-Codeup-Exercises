<?php

for ($i = 1; $i<=100; $i++) {
    if ($i % 2 == 1){
        continue;
    }
    echo "$i is an even number\n";
}

for ($i = 1; $i<=100; $i++) {
    if ($i >10 ){
        break;
    }
    echo "$i is an even number\n";
}