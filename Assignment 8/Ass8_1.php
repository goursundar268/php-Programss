<?php
// Write a php program to show a number is Palindrome or not.
function isPalin($n){
	$originalNumber = $n;
	$reversedNumber = 0;
	while ($n > 0) {
		$rem = $n % 10;
		$reversedNumber = ($reversedNumber * 10) + $rem;
		$n = (int)($n / 10);
	}
	if ($originalNumber == $reversedNumber) 
		echo "$originalNumber is a Palindrome Number.";
	else
		echo "$originalNumber is not a Palindrome Number.";
}
$num = readline("Enter the number: ");
isPalin($num);
?>