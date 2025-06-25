<?php
// Write a php program to delete elements using unset function.
$num = array(57,42,36);
echo "The first array: ";
foreach($num as $i){
	echo "[$i] ";
}

unset($num[1]);
echo "\nThe updated array: ";
foreach($num as $i){
	echo "[$i] ";
}
?>