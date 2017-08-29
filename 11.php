<?php
function getExp($num){

    $counter = 0;
    $i = 1;

    if($num < 10)
        return 0;

    while($num >= $i){

        $i *= 10;
        $counter++;
    }

    return $counter - 1;
}

function getNum($num, $pos){//получить число по порядковому номеру

    $pos = getExp($num) - $pos;
    return ( (int)($num / pow(10, $pos)) ) % 10;

}

function getSum($num){

    $sz = getExp($num);
    $sum = 0;

    for($n = 0; $n <= $sz; $n++) {
        $sum += getNum($num, $n);
    }

    return $sum;
}
$m = 1000;//рамзмер последовательности

for($n = 10; $n < $m; $n++) {

    $sum = getSum($n);
    $res = $n / $sum;
    if( gettype($res) == "integer"){
        echo $n;
        echo '|';
    }
}
