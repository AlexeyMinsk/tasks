<?php
//1002
function order($num, $fl = false){
//fl - порядок, true - восходящий
	
$flag = true;
$preResidue = $num % 10;
$value = (int)($num / 1000);

while(true){
	
	$residue = $num % 10;
	
	if($residue == 0){
		$flag = false;
		break;
	}
	
	if($fl && $residue < $value){
		$flag = false;
		break;
	}elseif(!$fl && $residue > $value){
		$flag = false;
		break;
	}
	
	if($fl){
		if($preResidue < $residue){
			$flag = false;
			break;
		}
	}else{
		if($preResidue > $residue){
			$flag = false;
			break;
		}
	}
	
	$num = ($num - $residue) / 10;	
	
	if($num < 10)	break;
	
	$preResidue = $residue;
}

if($flag)
	return true;
else
	return false;
}

for($i = 1001; $i < 10000;$i++){
	
	if( !($i%2) ){
		if( order($i, true) ){
			echo $i;
			echo '|->';
		}elseif( order($i) ){
			echo $i;
			echo '|<-';
		}
	}
}
?>