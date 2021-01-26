<?php

for ($i = 0; $i < 3; $i++){
    while (true){
        $num = rand(20, 100);
        if ($num > 90){
            var_dump($num);
            break;
        }
    }
}


