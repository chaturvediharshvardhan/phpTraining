<?php
$cars=array("toyota","BMW","sab" );
print_r($cars);
$length=count($cars);
for ($i=0;$i<$length;$i++)
{
	echo "<br>".$cars[$i]."<br>";

}
echo $length;

?>