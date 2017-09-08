<?php
function getExp($num){//получить разряд

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

function testNum($num){

    $checkArr = array(0,1,3,8);
    $pos = 0;
    $counter = -1;
    $size = getExp($num);

    while($size >= $pos) {

        $val = getNum($num, $pos);

        for($i = 0; $i < count($checkArr); $i++)
            if($checkArr[$i] === $val)
                $counter++;

        $pos++;
    }

    if($counter == $size)
        return true;
    else
        return false;
}

$db_array = array(
    array(130, 0, 0, 4),
    array(4,-5),
    array(7,8,-9),
);
$sum = 0;

for($n = 0; $n < count($db_array); $n++){
    for($m = 0; $m < count($db_array[$n]); $m++)
        if(testNum($db_array[$n][$m]) )
            $sum += $db_array[$n][$m];
}

echo $sum;