<?php
$N = 133468;
$counter = 0;

while($N){
    $num = $N % 10;
    $N = ($N - $num) / 10;

    if($num < 5)
        $counter++;
}

echo $counter;
?>