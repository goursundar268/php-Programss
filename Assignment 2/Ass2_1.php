<?php
//2.1 Write a PHP program to use variable with the global keyword.
$a = 45;
$b = 34;
$c = 20;
function add1(){
global $a, $b;
$sum1 = $a + $b;
echo "Summation of $a and $b is: $sum1 <br>";
}
function add2(){
global $a, $c;
$sum2 = $a + $c;
echo "Summation of $a and $c is: $sum2 <br>";
}
$sum3 = $b + $c;
echo "Summation of $b and $c is: $sum3 <br>";
add1();
add2();
?>