<?php
// Write a php program to find out the roots of the quadratic equation.
$a = readline("Enter the value of 'a': ");
$b = readline("Enter the value of 'b': ");
$c = readline("Enter the value of 'c': ");

echo "The quadratic equation is: " . $a . "x^2 + " . $b . "x + " . $c . " = 0\n";

// Calculate the discriminant
$d = ($b * $b) - (4 * $a * $c);

if ($d > 0) {
	// Two distinct real roots
    	$root1 = (-$b + sqrt($d)) / (2 * $a);
    	$root2 = (-$b - sqrt($d)) / (2 * $a);
    	echo "Roots are real and different: $root1 and $root2";
} elseif ($d == 0) {
    	// One real root
    	$root = -$b / (2 * $a);
    	echo "Roots are real and equal: $root";
} else {
    	// Complex roots
    	$realPart = -$b / (2 * $a);
    	$imaginaryPart = sqrt(-$d) / (2 * $a);
    	echo "Roots are complex: $realPart + {$imaginaryPart}i and $realPart - {$imaginaryPart}i";
}
?>