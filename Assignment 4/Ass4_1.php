<?php
// Write a php program to find out the grade of a number using switch case.
$marks = readline("Enter the marks : ");
switch (true) {
	case ($marks >= 90): {
		echo "Grade 'O', because you get $marks marks.";
		break;
	}
	case ($marks >= 80 && $marks <= 89): {
		echo "Grade 'A+', because you get $marks marks.";
		break;
	}
	case ($marks >= 70 && $marks <= 79): {
		echo "Grade 'A', because you get $marks marks.";
		break;
	}
	case ($marks >= 60 && $marks <= 69): {
		echo "Grade 'B+', because you get $marks marks.";
		break;
	}
	case ($marks >= 50 && $marks <= 59): {
		echo "Grade 'B', because you get $marks marks.";
		break;
	}
	case ($marks >= 40 && $marks <= 49): {
		echo "Grade 'C', because you get $marks marks.";
		break;
	}
	default:  {
		echo "You failed, because you get $marks marks.";
		break;
	}

} 
?>