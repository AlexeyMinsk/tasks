<?php
$num = 12345;//заданное число
$flag = true;
$preResidue = 9;

while(true){
	
	$residue = $num % 10;
	
	if($preResidue < $residue){
		$flag = false;
		break;
	}
	
	$preResidue = $residue;
	
	$num = ($num - $residue) / 10;	
	
	if($num < 10)
		break;
}

if($flag)
	echo "Образуют";
else
	echo "Не образуют";
?>