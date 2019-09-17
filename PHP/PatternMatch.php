<?php
$my_url = "www.guru99.com";
if (preg_match("/hello/", $my_url))// this function is used for pattern matching.
{
	echo "the url $my_url contains guru";
}
else
{
	echo "the url $my_url does not contain guru";
}


echo "<br>";
$my_text="I Love Regular Expressions";

$my_array  = preg_split("/ /", $my_text);//this function is used to split the string. 

print_r($my_array );






$text = "We at Guru99 strive to make quality education affordable to the masses. Guru99.com";

$text = preg_replace("/Guru/", 'hello', $text);//this function is used to replace the string. 

echo $text;



?>