<?php
$a=10;
class test
{
function mytest()
{
	global $a;
	echo $a."<br>";	
}
}
$call=new test();//as object
$call->mytest();


 function type($z)
 {

 	echo $z."<br>";
 }

 type("hello world");//as string
 type(123);//as integer
 type(12.5);// float

 $friend= array("harsh","ankit",1 );//as array
 $ff=implode($friend,',');//converts an array to string
 type($ff);

 /*var_dump($friend);*///var dump defines the value and its type
 

?>
