<?php
$arr = array(1, 22, 123, 11, -1, 543, 1);//заданный массив

$counterSigned = 0;// счётчик элементов предшествующих отрицательному числу
$counterSum = 0;//сумму нечетных элементов массива, следующих за последним отрицательным элементом
$fl = false;

for($i = 0; $i < sizeof($arr); $i++){

    if($arr[$i] < 0)
        $fl = true;

    if(!$fl)
        $counterSigned++;
    elseif($fl && $arr[$i] > 0)
        $counterSum += $arr[$i];
}

echo "counterSigned - $counterSigned, counterSum - $counterSum";
