<?php
// Write a PHP program to find out a number is Palindrome number or not.
$num = 12321;
$originalNumber = $num;
$reversedNumber = 0;

while ($num > 0) {
	$rem = $num % 10;
	$reversedNumber = ($reversedNumber * 10) + $rem;
	$num = (int)($num / 10);
}

if ($originalNumber == $reversedNumber) {
	echo "$originalNumber is a Palindrome Number.";
} else {
	echo "$originalNumber is not a Palindrome Number.";
}
?>