<?php
$arrA = array(1, 55, 15, 77, 54, -1, 66);

if(sizeof($arrA) < 2)
    die("Массив содержит менее 2 элементов");

$i = 0;
$indexMax = 0;
$indexMin = 0;
$min = $arrA[0] + $arrA[1];
$max = $arrA[0] + $arrA[1];

while( $i < sizeof($arrA) ){

    if($i) {
        if ($arrA[$i] + $arrA[$i - 1] < $min) {
            $indexMin = $i;
            $min = $arrA[$i] + $arrA[$i - 1];
        }
    }
    if($i < sizeof($arrA) - 1) {
        if ($arrA[$i] + $arrA[$i + 1] > $max) {
            $indexMax = $i;
            $max = $arrA[$i] + $arrA[$i + 1];
        }
    }
    ++$i;
}

echo "Номер элемента, сумма которого со следующим за ним элементом максимальна: $indexMax",
"Номер элемента, сумма которого с предыдущим элементом минимальна: $indexMin
(нумерация элементов с 0)";

