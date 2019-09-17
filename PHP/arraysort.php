<?php
$arr1= array("yash","ankit","harsh","shiv");
sort($arr1);//in acending order
print_r($arr1);
echo"<br>";
rsort($arr1);//in decending order
print_r($arr1);
echo "<br>";
$arr2=array("zdi" =>"10" ,"honda"=>"20" );
ksort($arr2);
print_r($arr2);
echo"<br>";
krsort($arr2);
print_r($arr2);

?>