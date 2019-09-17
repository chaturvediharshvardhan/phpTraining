<?php
//while loop demo
$x=1;

while($x<=10)
{
	echo $x."<br>"; 
	$x++;
}
//do while loop demo
$y=0;

do{
	echo "no is $y <br>";
	$y++;
}
while ( $y<= 1);

//for loop demo
$i=1;
for ($i=1;$i<=10;$i++)
{
	echo $i."<br>";
}
//foreach loop demo

$cars = array("bmw"=>"25","audi"=>"30","sab"=>"40" );
foreach ($cars as $x=>$x_value ) {
	echo "key=$x,value=$x_value";
	echo "<br>";
}

?>