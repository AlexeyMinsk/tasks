<?php
function getMaxValue(array $arrA){

    $i = 0;
    $max = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max)
            $max = $arrA[$i];

        ++$i;
    }
    return $max;
}

$arrA = array(1, 55, 15, 77, 54, -1, -66);
$arrB = array();

$max = getMaxValue($arrA);

for($i = 0; $i < count($arrA); $i++) {

    if ($arrA[$i] < 0 && !($arrA[$i] % 2)) {
        $arrB[] = $arrA[$i];
        $arrB[] = $max;
    }
    else
        $arrB[] = $arrA[$i];
}

print_r($arrB);