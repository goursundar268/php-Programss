<?php 
// Write a PHP program to find out the prime number upto n numbers.
$n = 50;
for ($i = 2; $i <= $n; $i++) {
	$isPrime = true;
	for ($x = 2; $x * $x <= $i; $x++){
		if($i % $x == 0){
			$isPrime = false;
			break;
		}
	}
	if ($isPrime) {
		echo "$i ";
	}
}
?>