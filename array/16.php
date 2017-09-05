<?php
$arrayNum = array(5, -33, 4, -22, 789, 789, 789, -57, -32);
$counter = 1;
$max = 1;
$before = null;

for($i = 0; $i < count($arrayNum); $i++){

    if($before === $arrayNum[$i]) {
        $counter++;

        if($max < $counter)
            $max = $counter;
    }else
        $counter = 1;

    $before = $arrayNum[$i];

}

echo "Максимальная длинна последовательности одинаковых чисел - $max";