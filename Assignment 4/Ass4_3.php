<?php
// Write a php program to show a character exists in two cases or in combine case.
$char = readline("Enter the character: ");
switch ($char) {
    case 'A':
    case 'B':
        echo "It is the character 'A' and 'B'.\n";
        break;

    case 'C':
    case 'D':
        echo "It is the character 'C' and 'D'.\n";
        break;

    default:
        echo "Wrong character.\n";
        break;
}
?>