<?php 
// Write a PHP program to show the sum of digits of a number.
$num = 4412;
$sum = 0;
if ($num > 0) {
	for (; $num > 0; $num = intval($num / 10)) {
		$sum += $num % 10;
	}
	echo "The Sum of the digit is: $sum";
} else {
	echo "Please enter a positive number.";
}
?>