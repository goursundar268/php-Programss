<?php 
// Write a php program to find odd and even upto n numbers.
$num = readline("Enter the number: ");

echo "Odd numbers: ";
for ($i = 0; $i <= $num; $i++) {
	if ($i % 2 != 0) {
		echo "$i ";
	}
}

echo "\nEven numbers: ";
for ($i = 0; $i <= $num; $i++) {
	if ($i % 2 == 0) {
		echo "$i ";
	}
}
?>