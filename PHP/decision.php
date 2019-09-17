
<html>
	<body>
		<form action="#" method="post">
			enter value one:<input type="text" name="t1">
			enter value two:<input type="text" name="t2">
			<input type="submit" name="b1" value="submit">

		</form>




<?php
$t=$_POST["t1"];
$a=$_POST["t2"];
if($t>$a){

for($i=0;$i<8;$i++)
{
	$t=$t+$a;
		echo $t."<br>";
	}
}
else{
	echo "value one must be greater than value two";
}


?>
	</body>
</html>