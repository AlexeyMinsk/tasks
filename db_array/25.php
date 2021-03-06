<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>25</title>
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
function getPosition(array $arr){//вернуть позицию строки по зананной сортировки

    $arrCounter = array();

    for($i = 0; $i < count($arr); $i++){
        $arrCounter[$i] = 0;
        for($s = 0; $s < count($arr[$i]); $s++){
            if(testPrimal($arr[$i][$s]) )
                $arrCounter[$i]++;
        }
    }
    return getPriority($arrCounter);
}

function sortArr(array &$arr, $sort = true){//сортировка переданного массива

    for($i = 0; $i < count($arr); $i++){

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if($value > $arr[$n] && $sort){
                $value = $arr[$n];
                $index = $n;
            }elseif($value < $arr[$n] && !$sort){
                $value = $arr[$n];
                $index = $n;
            }
        }
        switchElem($arr, $i, $index);
    }
}

function getPriority(array $arr){//вернуть массив с порядком строк

    $arrPriority = array();
    $tempArr = $arr;
    sortArr($tempArr);

    for($i = 0; $i < count($tempArr); $i++){
        for($s = 0; $s < count($arr); $s++){

            if($tempArr[$i] == $arr[$s] && !hasAvailability($arrPriority, $s)) {
                $arrPriority[] = $s;
                break;
            }
        }
    }
    return $arrPriority;
}

function switchElem(array &$arr, $elem1, $elem2){//поменять элементы местами

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

function printTable(array $db_arr, $tableName){//печать массива в таблицу

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

function testPrimal($N){

    if($N < 2)
        return false;
    elseif($N == 2 || $N == 3)
        return true;

    $fl = true;

    for($n = 4; $n <= $N / 2; $n++) {

        if(!($N % $n) ){
            $fl = false;
            break;
        }
    }
    return $fl;
}

function hasAvailability(array $arr, $n){

    for($i = 0; $i < count($arr); $i++)
        if($arr[$i] == $n)
            return true;

    return false;
}

$db_array = array(
    array(13, 22, 1, 3, 2),
    array(0, 1, 2, 3, 4),
    array(2, 8, 9, 3, 12),
    array(32, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
$temp_arr = array();

$arrPriority = getPosition($db_array);

for($i = 0; $i < count($db_array); $i++){
    $temp_arr[$i] = $db_array[$arrPriority[$i] ];
}

printTable($temp_arr, 'Отсортированная');
?>
</body>
</html>