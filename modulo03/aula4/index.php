<?php

$a = 1;
$b = 1;
$c = 1;

for($i = 0; $i > 10; $i++){
    $a = $a + 1;
    if($i % 2 == 0){
        $b = $b + 1;
    }else{
        $b = $b + $a;
    }
}

$c = $a + $b + $c;