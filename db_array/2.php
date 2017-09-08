<?php
$db_array = array(
    array(1,2,3),
    array(4,-5,6),
    array(7,8,-9),
);
$max_average = 0;

for($n = 0; $n < count($db_array); $n++){

    $sum = 0;
    $counter = 0;
    $sum_average = 0;

    for($m = 0; $m < count($db_array[$n]); $m++)
        if($db_array[$n][$m] > 0) {
            $sum += $db_array[$n][$m];
            $counter++;
        }

    if($sum) {
        $sum_average = $sum / $counter;
        if ($max_average < $sum_average)
            $max_average = $sum_average;
    }
}

echo $max_average;