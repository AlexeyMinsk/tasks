<?php
$N = 133468;
$counter = 0;

while($N > 9){
    $num = $N % 10;
    $N = ($N - $num) / 10;

    if($num < 5)
        $counter++;
}
if($N < 5)
    $counter++;

echo $counter;
?>