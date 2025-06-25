<?php
// Write a php program to sort numeric elements in ascending and descending order.
$num = array(59,210,14,35,85);
echo "The first array: ";
foreach($num as $i) {
	echo "[$i] ";
}

sort($num);
echo "\nThe sorted array in ascending order: ";
foreach($num as $i) {
	echo "[$i] ";
}

rsort($num);
echo "\nThe sorted array in descending order: ";
foreach($num as $i) {
	echo "[$i] ";
}
?>