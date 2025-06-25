<?php
// Write a php program to sum of n numbers using for loop.
$sum = 0;
$num = readline("Enter the numbers: ");
for ($i = 0; $i <= $num; $i++) {
	$sum = $sum + $i;
}
echo "The sum of $num numbers is: $sum";
?>