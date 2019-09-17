
<html>
<body>
	<style type="text/css">

	body{

		background-color: #ffffcc;
	}
	form{

			border-style: ;
			width: 300px;
			margin-left: 600px;
			margin-top: 200px;
			background-color: #ccffcc;
			font-size: 15px;
			padding: 15px;
		}
	}	


	</style>

	<form>

welcome <?php   echo $_POST["name"];  ?><br>
your email id is <?php echo $_POST["email"];  ?><br>
gender is :<?php  if(isset($_POST["gender"]))
{
	echo $_POST["gender"];
}     ?>


<br>following languages are known  <?php if(isset($_POST["language"]))
{
	$language=$_POST["language"];
/*	print_r($language);*/
	$lang=implode(" ", $language);
	echo $lang;
	/*foreach ($_POST["language"] as $lang) {
		echo $lang.",";
	*/	
	}

   ?><br>
the uploaded file is <?php echo $_POST["attachment"]; /*header( "Location: formdata.php" );*/     ?>
</form>
</body>
</html>