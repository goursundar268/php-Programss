<?php 
// Write a php program to find out the factorial of a number using for loop in php.
$num = readline("Enter the number: ");
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
	$fact = $fact * $i;
}
echo "The factorial of $num is: $fact";

?>