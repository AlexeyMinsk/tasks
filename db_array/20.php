<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;

    while($i < sizeof($arrA) ){

        if(isset($max) ){
            if($arrA[$i] > $max && testUnique($arrA, $i) )
                $max = $arrA[$i];
        }else{
            if(testUnique($arrA, $i) )
                $max = $arrA[$i];
        }
        ++$i;
    }
    return isset($max)? $max : false;
}

function testUnique(array $arr, $index){

    for($i = 0; $i < count($arr); $i++) {
        if ($i == $index)
            continue;
        elseif($arr[$i] == $arr[$index])
            return false;
    }
    return true;
}

$db_array = array(
    array(13, 22, 1, 3, 22),
    array(2, 2, 2),
    array(2, 8, -9, 3, 12),
    array(32, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

for($i = 0; $i < count($db_array); $i++) {

    $max = getMaxElement($db_array[$i]);

    if($max == false)
        echo "В строке $i нет уникальных цифр";
    else
        echo "В строке $i максимальное уникальное число = $max";

    echo ' | ';
}