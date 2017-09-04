<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $indexMax = 0;
    $max = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max){
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }
    return [$indexMax, $max];
}

function changeElementsArr(&$arr, $elem1, $elem2){

    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

$arrA = array(1, 55, 15, 77, 54, -1, 66);

$i = sizeof($arrA) - 1;
$indexNegative;

while( $i != 0 ){//найти индекс отрицательного елемента
    if($arrA[$i] < 0){
        $indexNegative = $i;
        break;
    }
    --$i;
}

if( !isset($indexNegative) )
    die("Массив не содержит отрицательных значений или пуст");

$indexMax = getMaxElement($arrA)[0];
changeElementsArr($arrA, $indexNegative, $indexMax);

print_r($arrA);
