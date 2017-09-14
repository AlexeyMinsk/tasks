<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

function sortArr(array &$arr, $sort = true){

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

function switchElem(array &$arr, $elem1, $elem2){

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

function getPriority(array $arr){

    $arrPriority = array();
    $tempArr = $arr;

    sortArr($tempArr);

    for($i = 0; $i < count($tempArr); $i++){
        for($s = 0; $s < count($arr); $s++){

            if($tempArr[$i] == $arr[$s]) {
                $arrPriority[] = $s;
                break;
            }
        }
    }
    return $arrPriority;
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
    array(13, 22, 1, 3, 2),
    array(0, 1, 2, 3, 4),
    array(2, 8, -9, 3, 12),
    array(32, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
$orderArr = getPriority($db_array[0]);

for($i = 0; $i < count($db_array[0])/2; $i++)
    switchColumn($db_array, $orderArr[$i], $i);

printTable($db_array, 'Отсортированная');
?>

</body>
</html>