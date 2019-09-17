<?php
define("greeting","hello");
echo greeting."<br>";

define("cars", [
"bmw",
"audi"]);
echo cars[0]."<br>";
//constants are global and can be used across the script
function mytest()
{
	echo greeting;
}
mytest();


?>