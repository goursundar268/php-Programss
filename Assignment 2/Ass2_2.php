<?php
//2.2 Write a PHP program to use a static variable.
function CSS(){
static $x = 1;
echo "x : $x <br>";
$x = $x + 1;
}
CSS();
CSS();
CSS();
?>