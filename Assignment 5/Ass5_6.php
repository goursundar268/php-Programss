<?php 
// Write a php program to print cricket player's name five times by passing arguments through functions (Single argument passing)

$p_name = array("Sachin","Virat","Hardik","Rohit","Dhoni");
function cricketer_name ($name) {
	echo "The name of Cricket Players: ";
	foreach ($name as $i) {
		echo "$i, ";
	}
}
cricketer_name($p_name);
?>