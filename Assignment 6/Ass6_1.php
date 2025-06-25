<?php
//Write a php program to add an element / elements to an existing array.

$names = array("Barasat", "BWU", "CSS");
echo "The first array: ";
foreach($names as $i) {
	echo "[$i] ";
}

$names[] = "BCA & MCA";
echo "\nThe updated array: ";
foreach($names as $i) {
	echo "[$i] ";
}
?>