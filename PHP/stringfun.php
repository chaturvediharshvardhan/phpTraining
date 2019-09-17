<?php
$a="hello world\"cvxcc\"";
echo $a;
echo strlen($a) . "<br>";//for calculating the length of the string
echo str_word_count($a)."<br>";//for counting the words in the string
echo strrev($a)."<br>";//for reversinf the string
echo strpos($a, "world")."<br>";//for finding the starting position of the word in the string
echo str_replace("world", "there", "hello world");//for finding a word in the string and replacing with a new world

$txt="india";
$no=123;
$str=sprintf("<br>this is [%s] and we are %f",$txt,$no);//replaces the %sing by the variable passed as an argument.
echo $str;

$star="hello my name is harsh 123";
echo "<br>";
sscanf($star,"%s %s %s %s %s %d",$hello,$my,$name,$is,$harsh,$no);
var_dump($hello,$my,$name,$is,$harsh,$no);
$full=sscanf($star,"%s %s %s %s %s %d");
echo "<br>";
print_r($full);
/*ltrim(str);removes the character from the left side of a string
rtrim(str);removes caharacter from the right side off a string
print;out puts a string
sprintf(format);puts variables in a string in a specified formatre
sscanf(str, format);converts a stirng in variables in a specified formate
str_repeat(input, multiplier);does repetation of a string 
addslashes(str);add a backslash innfront of a presefined character
addcslashes(str, charlist);adds a slash in front of a specified character
strcasecmp(str1, str2);compares two string in case sensitive
strnatcasecmp(str1, str2);//compares two string case insensitive
strcmp(str1, str2)compares two string in natural algoritham
str_split(string);splits a stirng in array
chunk_split($str,1,".")slplits esch character on a string with a .
bin2hex(str)converts a string to hexadecimal 
explode(delimiter, string)converts a stinring to an array
join();joinsn an array element to a string
lcfirst(str)converts the first character of the string to lower
ucwords() - converts the first character of each word in a string to uppercase
strtoupper() - converts a string to uppercase
strtolower() - converts a string to lowercase
str_shuffle(str)shuffels the string randomly */
?>
