<?php
$marks = 90;
if ($marks >= 90 && $marks <= 100) {
    echo "Grade O, because you get $marks marks";
}
else if ($marks >= 80 && $marks <= 89) {
    echo "Grade A+, because you get $marks marks";
}
else if ($marks >= 70 && $marks <= 79) {
    echo "Grade A, because you get $marks marks";
}
else if ($marks >= 60 && $marks <= 69) {
    echo "Grade B, because you get $marks marks";
}
else if ($marks >= 50 && $marks <= 59) {
    echo "Grade C, because you get $marks marks";
}
else {
    echo "You failed, because you get $marks marks";
}
?>