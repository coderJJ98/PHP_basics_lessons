<?php
$str= "this";
echo $str;
$len = strlen($str);
echo "The length of the string is:".$len ."<br>Thanyou";
echo "<br>";
echo "The number of words in this string is:". str_word_count($str) ."<br>Thank you";
echo "<br>";
echo "The reversed string is:". strrev($str) ."<br>Thank you";
echo "<br>";
echo "The search of position in string is:". strpos($str,"is") ."<br>Thank you";
echo "<br>";
echo "The replace of a particular string is:". str_replace("is","at",$str) ."<br>Thank you";

?>