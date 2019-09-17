<?php

$student=array('maths' =>50 ,'science'=>60,"oop"=>70,"programe"=>90 );//using an associative array
foreach ($student as $key => $value) {
	echo "student one got ".$value." in subject ".$key."<br><br>";
}

$cars= array("volvo","bmw","mercedies","audi" );
$prize=array("50","60","70","80" );
	print_r(array_change_key_case($cars,CASE_UPPER));//changes the case of the elements of array in upper case
	echo"<br>";
	print_r(array_chunk($cars, 3));//divides an array in chunk of three
	echo "<br>";
	print_r(array_combine($cars, $prize));//combines two array as key and value
	echo"<br>";
	print_r(array_count_values($cars));//counts the vlaues of array as how many times a particular values occure
	echo "<br>";

	$a=array_fill(0, 4, "hii");
	print_r($a);
	echo "<br>";
	$a1=array_fill_keys($cars, "black");                                             
	print_r($a1);
	/*array_flip(trans)
	array_intersect(array1, array2)compare values of two array and returns the matches 
	array_filter(input)
	array_merge(array1) merge two array and makes a new array
	array_merge_recursive(array1)
		array_combine(keys, values)
		array_map(callback, arr1)multiplay each value by itself and returns and array
		array_keys(input)
		array_key_exists(key, array)
		array_intersect(array1, array2)*/
echo"<br>";
		$names=array("harsh","ankit","anurag");

/*print_r($names);*/
/*foreach ($names as $key) {
	echo "name is:-". $key;
}
*/
$no=count($names);

for($i=0;$i<$no;$i++){
echo "name is->".$names[$i]."<br>";
}
echo "<br>";
$i=0;
while($i<$no)
{
	
	echo "names are:-".$names[$i]."<br>";
	$i++;
}
echo"<br>";

$i=0;	
do{
	echo"name is:-".$names[$i]."<br>";
	$i++;
}
while ($i<$no);









?>