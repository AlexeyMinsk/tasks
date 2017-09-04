<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $max = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max && !($arrA[$i]%2) ) {
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }
    return [$indexMax, $max];
}

function getMinElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $min = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] < $min){
            $indexMin = $i;
            $min = $arrA[$i];
        }
        ++$i;
    }
    return [$indexMin, $min];
}

$arrayNum = array(1, -33, 4, 444, 789, 22);

$maxArr = getMaxElement($arrayNum);
$minArr = getMinElement($arrayNum);

for($i = 0; $i < count($arrayNum); $i++){

    if($arrayNum[$i] % 2)
        $arrayNum[$i] = $min[1];
    else
        $arrayNum[$i] = $max[1];
}

print_r($arrayNum);