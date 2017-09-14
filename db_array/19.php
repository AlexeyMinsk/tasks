<?php
function switchSquare(array $db_array){

    $temp_arr = array();
    $axis_n = (int)(count($db_array)/2);
    $axis_m = (int)(count($db_array[0])/2);
    $kor = 0;

    for($n = 0; $n < count($db_array); $n++){
        for($m = 0; $m < count($db_array[$n]); $m++){

            if($n >= $axis_n)
                $axis_n = -$axis_n;

            $tmp_n = $axis_n + $kor + $n;

            if ($m >= $axis_m)
                $axis_m = -$axis_m;

            $tmp_m = $axis_m + $kor + $m;
            $temp_arr[$n][$m] = $db_array[$tmp_n][$tmp_m];

            if($axis_n < 0)
                $axis_n = -$axis_n;
            if($axis_m < 0)
                $axis_m = -$axis_m;
        }
    }
    print_r($temp_arr);
}

$db_array = array(
    array(13, 22, 3, 4),
    array(4, -5, 2, 2),
    array(22, 81, 30, 31),
    array(24 ,1, 23, 221)
);

switchSquare($db_array);