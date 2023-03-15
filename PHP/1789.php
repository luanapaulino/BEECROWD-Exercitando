<?php 

$n = 10;
$vel = [10, 10, 10, 10, 15, 18, 20, 15, 11, 10];
max($vel);


    if($vel < 10){
        $nivel = 1;
    } elseif($vel >= 10 && $vel < 20){
        $nivel = 2;
    } elseif($vel >= 20){
        $nivel = 3;
    }

    echo "$nivel"

?>