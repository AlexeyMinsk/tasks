<?php
$arrayNum = array(5, -33, 4, -22, 789, -22, 436, -57, -32);
$k = 3;//последовательность
$x = 347;//заданное число
$counter = 0;
$sum = 0;
$fl = false;
$size = count($arrayNum) - ($k - 1);

for( $i = 0; $i < $size; $i++ ){

    while($counter < $k){

        $sum += $arrayNum[$i + $counter];
        $counter++;
    }
    if($sum == $x){
        $fl = true;
        break;
    }

    $sum = 0;
    $counter = 0;
}

if($fl)
    echo "Есть";
else
    echo "Нет";
