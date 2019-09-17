<?php


	function test(&$b)//call by refrence
	{
$b.="there";
	}
$a="hello";
test($a);
echo $a;//hello there is printed because we have passed refrence of a


function mytest($d)//call by value
{
$d+=$d;

}
$c=20;
mytest($c);
echo "<br>$c";//just prints the value of c because no refrence is passed
?>