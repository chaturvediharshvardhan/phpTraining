<html>
<body>
	<style type="text/css">

	body{

		background-color: #ffffcc;
	}
		form {
			border-style: ;
			width: 300px;
			margin-left: 600px;
			margin-top: 200px;
			background-color: #ccffcc;
			font-size: 15px;
			padding: 15px;
		}
	</style>
	
	<form action="wlcome.php" method="post">
		name:<input type="text" name="name"  ><br>
		email:<input type="email" name="email"  ><br>
		gender: male<input type="radio" name="gender" value="male"  >female<input type="radio" name="gender" value="female"  ><br>
		languages: 
		php<input type="checkbox" name="language[]" value="php" ><br>
		java<input type="checkbox" name="language[]" value="java"  ><br>
		python<input type="checkbox" name="language[]" value="python"  ><br>
		attchment:<input type="file" name="attachment" ><br><br>
		<input type="submit" vlaue="submit">
		</form>
</body>
</html>


<!-- welcome <?php echo $_POST["name"];  ?><br>
your email id is <?php echo $_POST["email"];  ?> -->






	