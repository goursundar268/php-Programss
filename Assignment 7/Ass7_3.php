<?php
// Write a PHP program to find out a number is Armstrong number.
$num = 407;
$temp = $num;
$sum = 0;

$digits = strlen((String)$num);

while($temp > 0) {
	$digit = $temp % 10;
	$sum += pow($digit, $digits);
	$temp = (int)($temp / 10);
}

if($sum == $num) {
	echo "$num is an Armstrong number.";
}else{
	echo "$num is not an Armstrong number.";
}
?>