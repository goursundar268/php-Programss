<?php
// Write a php program to show a number is your choice or not using switch case.
$num = readline("Enter your number: ");
switch ($num) {
	case ($num == 2000): {
		echo "$num is my favourite number. ";
		break;
	}
	case ($num == 300): {
		echo "$num is not my favourite number. ";
		break;
	}
	default: {
		echo "It is wrong number. ";
		break;
	}
}
?>