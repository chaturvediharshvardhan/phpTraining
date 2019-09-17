<?php
	
	$a=10;
	$b=20;
	$z=$b%$a."<br>";//arithmetic and assignment operators
	$y=$b/$a."<br>";
	echo "division is $y";
	echo "mode is $z";

	$w=100;
	 $x="100";
	var_dump($w==$x);//it returns true  if two values are equal regardless of theie data type
	echo "<br>";
	var_dump($w===$x);//it returns true if two values and their data types are also same
	echo "<br>";
	var_dump($w<=>$x);//spaceship operators	

	echo $x++;// pre increment
	echo "<br>";
	echo ++$x;//post increment
    echo"<br>";
	var_dump($a==20 and $b==10);//returns true if both x and y are true
	var_dump($a==10 or $b==10);//returns true either of x and y are true

	$txt1="hello";
	$txt2="world";
	echo "<br>".$txt1.$txt2;
	echo "<br>".$txt1.=$txt2."<br>";

	$arr1= array("honda"=>"70","hero"=>"50","tvs"=>"30" );
	$arr2= array("honda"=>70,"hero"=>"50","tvs"=>"30" );
	var_dump($arr1==$arr2);//reutrns true if both array has same key value pair
	echo "<br>";
	var_dump($arr1===$arr2);//returns true if both array has same key value and of same type

	echo $status=$a>$b?"true":"false";



?>