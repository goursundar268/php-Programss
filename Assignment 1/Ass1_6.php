<?php
$str = "Hello World!";
echo "Original String: $str <br>";

$str1 = strtoupper($str);
echo "Upper Case: $str1 <br>";

$str2 = strtolower($str);
echo "Lower Case: $str2 <br>";

$str3 = str_replace("World","Brainware",$str);
echo "Replaced String: $str3 <br>";
?>