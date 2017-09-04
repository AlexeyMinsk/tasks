<?php
$arrA = array(1, 55, 15, 77, 54, -1, 66);
$i = 0;
$indexPositive;
$indexNegative;

while( $i < sizeof($arrA) ){//найти индекс положительного елемента
    if($arrA[$i] > 0){
        $indexPositive = $i;
        break;
    }
    ++$i;
}

if( !isset($indexPositive) )
    die("Массив не содержит положительных значений или пуст");

$i = sizeof($arrA) - 1;
while( $i != 0 ){//найти индекс отрицательного елемента
    if($arrA[$i] < 0){
        $indexNegative = $i;
        break;
    }
    --$i;
}

if( !isset($indexPositive) )
    die("Массив не содержит отрицательных значений или пуст");

$temp = $arrA[$indexPositive];
$arrA[$indexPositive] = $arrA[$indexNegative];
$arrA[$indexNegative] = $temp;

print_r($arrA);

