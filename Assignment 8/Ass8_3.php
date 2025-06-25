<?php
// Write a php program to find out the oddsum and evensum upto n numbers.
$num = readline("Enter the value of n: ");
$odd_sum = 0;
echo "Odd numbers: ";
for ($i = 0; $i <= $num; $i++) {
	if ($i % 2 != 0) {
		echo "$i ";
		$odd_sum = $odd_sum + $i;
	}
}
echo "\nSum of Odd numbers: $odd_sum \n";

$even_sum = 0;
echo "\nEven numbers: ";
for ($i = 0; $i <= $num; $i++) {
	if ($i % 2 == 0) {
		echo "$i ";
		$even_sum = $even_sum + $i;
	}
}
echo "\nSum of Even numbers: $even_sum";

?>