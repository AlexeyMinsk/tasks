<?php
function testOrder(array $arr, $ord = true){

    for($n = 1; $n < count($arr); $n++){

        if($arr[$n] < $arr[$n-1] && $ord)
            return false;
        if($arr[$n] > $arr[$n-1] && !$ord)
            return false;
    }
    return true;
}

function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 1;
    $max = $arrA[$i];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max)
            $max = $arrA[$i];

        ++$i;
    }
    return $max;
}

function getMinElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 1;
    $min = $arrA[$i];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] < $min)
            $min = $arrA[$i];

        ++$i;
    }
    return $min;
}

$db_array = array(
    array(1,2,3,2,4),
    array(4,-5,6),
    array(7,8,-9),
    array(7,8,9),
    array(7,6,1),
);

for($n = 0; $n < count($db_array); $n++){

    if( testOrder($db_array[$n]) || testOrder($db_array[$n], false)){
        echo "Максимальный элемент в строке ", $n+1,' это ', getMaxElement($db_array[$n]),
        " минимальный элемент в строке ", $n+1,' это ', getMinElement($db_array[$n]), ' | ';
    }
}
