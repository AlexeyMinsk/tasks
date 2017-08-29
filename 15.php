<?php
$N = 18;//заданное число

for($i = 1; $i <= $N; $i++){
    $res = $N / $i;

    if(gettype($res) == "integer") {
        echo $i, '|';
    }
}