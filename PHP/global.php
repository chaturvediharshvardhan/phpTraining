<?php
$x=10;
$y=20;
$z=30;

function myTest()
{
	global $x,$y;
	echo "value of x in function is $x and y is $y and z is". $GLOBALS['z']."<br>";
}
myTest();
echo "vallue of x outside function is $x";
?>
