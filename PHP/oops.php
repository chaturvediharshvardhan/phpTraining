<?php

class age 
{
	
	public function age()
	{ 
		 $a=100;
		echo "no is $a  <br>";
	}
}
/**
 * 
 */
class man extends age
{
	
	public function area($s)
	{ 
		$ans=$s*$s;
		echo "area of square is  $ans <br>";
	}
	public function abc($a,$b)
	{

		$ans=$a*$b;
		echo "area of rectangle is $ans";
	}

}

$obj1=new man();
$obj1->area(10);
$obj1->abc(10,20);

?>