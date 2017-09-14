<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица</title>
    <style>
        .tbl{
            float:left;
            padding-right:20px;
        }
        .tbl td{
            border: 2px solid black;
            text-align: center;
            font-size:2rem;
        }
    </style>
</head>
<body>
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
    return $temp_arr;
}

function printTable(array $db_arr, $tableName){

    echo '<table class="tbl">', '<caption>',$tableName,'</caption>';
    for($n = 0; $n < count($db_arr); $n++) {
        echo '<tr>';

        for ($m = 0; $m < count($db_arr[$n]); $m++) {
            echo '<td>', $db_arr[$n][$m], '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$db_array = array(
    array(13, 22, 3, 4),
    array(4, -5, 2, 2),
    array(22, 81, 30, 31),
    array(24 ,1, 23, 221)
);

$temp_arr = switchSquare($db_array);
printTable($db_array, 'Исходный массив');
printTable($temp_arr, 'Полученный массив');
?>
</body>
</html>