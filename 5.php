<?php
function getExp($num){
	
	$counter = 0;
    $i = 1;
	while($num > $i){

        $i *= 10;
        $counter++;
	}

    return $counter - 1;
}

$N = 12345;
$M = 0;
$count = getExp($N);
$residue = 0;	


while($N > 9){

    $residue = ($N % 10);
    $M += $residue * pow(10, $count);
    $count--;
    $N = ($N - $residue) / 10;
}

$M += $N * pow(10, $count);

echo $M;
?>