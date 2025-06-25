<?php
//Write a php program to remove an element to an existing array.

s

array_splice($names, 0, 3); // array_splice(arrayvariablename, start position, end position-1)
echo "\nThe updated array: ";
foreach($names as $i) {
	echo "[$i] ";
}
?>