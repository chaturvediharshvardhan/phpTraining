<?php


function myTest()
{
	static $a=10;
	echo $a;
	$a++;
	
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";


class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);//instance of is used to determine that wheather the variable is an instance of any class;





//static methods and static properties can be called by using the class  name like class name::function name;
//static methods and static properties can be called with in a class using self::property name;
//autoload is a function which is automatically called when a code section is hasnt been loaded;
//namespace->redeclaring the same classes in a seprate namespace section;
//namespace must be declared at the top of the file with the key word namespace; 
 

?>
