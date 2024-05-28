<?php
for ($i = 1; $i < 14; $i++){
    if($i % 14 === 0){
        break;
    }
    if ($i % 2 === 0){
        continue;
    }
    echo $i ."\n";
    }
    echo "for₋out";
    ?>