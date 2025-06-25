<?php 
// Write a php program to find out the odd sum and even sum using while and do-while loop.
$num = readline("Enter the number: ");
$i = 0;
$odd_sum = $even_sum = 0;
while ($i <= $num) {
	if ($i % 2 != 0) {
		$odd_sum += $i;
	} else {
		$even_sum += $i;
	}
	$i++;
}
echo "\nOdd sum (while): $odd_sum \nEven sum (while): $even_sum";

$j = $sum_odd = $sum_even = 0;
echo "\nOdd sum and Even sum using do-while loop: ";
do {
	if ($j % 2 != 0) {
		$sum_odd += $j;
	} else {
		$sum_even += $j;
	}
	$j++;
} while ($j <= $num) ;
echo "\nOdd sum (do-while): $sum_odd \nEven sum (do-while): $sum_even";
?>