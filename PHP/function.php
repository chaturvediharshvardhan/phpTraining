<?php
$a=20;
$b=30;
function test($a,$b)
{
$sum=$a+$b;
echo "addition is $sum <br>";

}



function recursive($num)
{    
	if($num<10) {
		echo $num."<br>";
		$num=$num+1;
	recursive($num);
	}
}



function factorial($number)
{
	if($number<0)
	return -1;
	if($number==0)
	return 1;
	return ($number*factorial($number-1));
}
test($a,$b);
test(20,20);
recursive(5);
echo  factorial(5);



?>