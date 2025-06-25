<?php
// Write a php program to sort string elements in ascending and descending order.
$names = array("Sumi", "Riya","Moumita","Swati","Chetana", "Debangana","Sneha");
echo "The first array: ";
foreach($names as $i) {
	echo "[$i] ";
}
sort($names);
echo "\nThe sorted array in ascending order: ";
foreach($names as $i) {
	echo "[$i] ";
}

rsort($names);
echo "\nThe sorted array in descending order: ";
foreach($names as $i) {
	echo "[$i] ";
}
?>