<?php
$num = 2234;//заданное число
$flag = true;
$preResidue = 9;

while($num > 9){

    $residue = $num % 10;

    if($preResidue <= $residue){
        $flag = false;
        break;
    }

    $preResidue = $residue;

    $num = ($num - $residue) / 10;
}

if($flag && $preResidue <= $num)
    $flag = false;

if($flag)
    echo "Образуют";
else
    echo "Не образуют";
?>