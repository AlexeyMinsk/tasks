<?php
function unique($num){//проверка на уникальность

    for ($n = 0; $n < 4; $n++) {

        $a = $num / pow(10, $n) % 10;

        for ($m = $n+1; $m < 4; $m++) {
            $b = $num / pow(10, $m) % 10;
            if($a == $b)
                return false;
        }
    }
    return true;
}
//заданнные по условиям числа
$q = 0;
$w = 2;
$e = 3;
$r = 7;
$count = 0;

for($i = 1000; $i < 10000; $i++) {

    if(unique($i)) {
        for ($n = 0; $n < 4; $n++) {

            $a = $i / pow(10, $n) % 10;
            if ($a == $q || $a == $w || $a == $e || $a == $r)
                $count++;
            else
                break;
        }
    }

    if($count == 4)
        echo $i, '|';
    $count = 0;
}