<?php

$N = 6;//рамзмер последовательности
$fl = true;

for($n = 2; $n <= $N / 2; $n++) {

    $res = $N / $n;

    if( gettype($res) == "integer"){
        $fl = false;
        break;
    }
}

if($fl)
    echo "Является";
else
    echo "Не является";