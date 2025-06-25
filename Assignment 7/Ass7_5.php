<?php
// Write a PHP program to reverse a number.
$num = 12321;
echo "Original Number: $num <br>";
$rev = 0;
while($num > 0) {
	$rem = $num % 10;
	$rev = ($rev * 10) + $rem;
	$num =  (int)($num / 10);
}
echo "Reversed number: $rev";
?>