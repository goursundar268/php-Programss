<?php
// Write a php program to show a global variable is used by n number of functions.
$sum; // Global variable 
function Sum1()
{‏
	$num1 = 12;
	$num2 = 76;
	$sum = $num1 + $num2;
	echo "Summation of $num1 and $num2 is: $sum <br>";
}
function Sum2()
{
	$num1 = 365;
	$num2 = 87;
	$sum = $num1 + $num2;
	echo "Summation of $num1 and $num2 is: $sum <br>";
}
sum1();
sum2();
?>