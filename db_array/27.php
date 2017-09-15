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
function getMaxColumn(array $arrA, $col){

    if(!sizeof($arrA))
        die("Массив пуст");

    $max = $arrA[0][$col];

    for($i = 1; $i < count($arrA); $i++)
        if ($arrA[$i][$col] > $max)
            $max = $arrA[$i][$col];

    return $max;
}

function switchColumn(array &$arrA, $column_1, $column_2){

    if($column_1 == $column_2)
        return;

    $tempArr = array();

    for($i = 0; $i < count($arrA); $i++) {
        for($n = 0; $n < count($arrA[$i]); $n++) {

            if($n == $column_1) {
                $tempArr[$i][$n] = $arrA[$i][$column_2];
            }elseif($n == $column_2) {
                $tempArr[$i][$n] = $arrA[$i][$column_1];
            }else {
                $tempArr[$i][$n] = $arrA[$i][$n];
            }
        }
    }
    $arrA = $tempArr;
}

function getMaxArr(array $db_arr){

    $temp_arr = array();

    for($i = 0; $i < count($db_arr[0]); $i++)
        $temp_arr[] = getMaxColumn($db_arr, $i);

    return $temp_arr;
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

function hasAvailability(array $arr, $n){

    for($i = 0; $i < count($arr); $i++)
        if($arr[$i] == $n)
            return true;

    return false;
}

function switchElem(array &$arr, $elem1, $elem2){//поменять элементы местами

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

function sortColumn(array &$db_arr){

    $position_arr = getPriority(getMaxArr($db_arr) );

    for($i = 0; $i < count($db_arr)/2; $i++)
        switchColumn($db_arr, $i, $position_arr[$i]);
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

$db_array = array(
    array(13, 22, 15, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

sortColumn($db_array);
printTable($db_array, 'Отсортированная');
?>
</body>
</html>