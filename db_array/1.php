<?php
$db_array = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
);
$sum_diagonal = 0;
$sum_diagonal_up = 0;
$sum_diagonal_down = 0;

for($n = 0; $n < count($db_array); $n++){

    for($m = 0; $m < count($db_array[$n]); $m++){
        if($n == $m)
            $sum_diagonal += $db_array[$n][$m];
        elseif($m > $n)
            $sum_diagonal_down += $db_array[$n][$m];
        elseif($m < $n)
            $sum_diagonal_up += $db_array[$n][$m];
    }
}

echo "Сумма элементов по диагонали - $sum_diagonal,
Сумма элементов выше диагонали - $sum_diagonal_up,
 Сумма элементов ниже диагонали - $sum_diagonal_down";