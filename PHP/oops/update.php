<?php
include_once 'class.user.php';  $user = new User(); // Checking for user logged in or not
$url =   $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


$path=basename($url);
echo $path;
$userlist=$user->EditUser($path);
/*print_r($userlist);*/


if (isset($_REQUEST['submit'])){

	extract($_REQUEST);

	$update = $user->UpdateUser($path,$name,$email,$file);

	if ($update) {

		
		echo 'updation successful <a href="/harsh/oops/home.php">Click here</a> to Go To Home';


	} else {

		

		echo 'updation failed.  please try again';

	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html"/>
	Register
</head>
<style><!--
#container{width:400px; margin: 0 auto;}
--></style>

<script type="text/javascript" language="javascript">

	function submitreg() {

		var form = document.reg;

		if(form.name.value == ""){

			alert( "Enter name." );

			return false;

		}

		else if(form.uname.value == ""){

			alert( "Enter username." );

			return false;

		}

		else if(form.upass.value == ""){

			alert( "Enter password." );

			return false;

		}

		else if(form.uemail.value == ""){

			alert( "Enter email." );

			return false;

		}

	}





</script>

<body>

	<div id="container">
		<h1>Update Here</h1>
		<form action="" method="post" name="reg">
			<table>
				<tbody>
					<tr>
						<th>Name:</th>
						<td><input type="text" name="name" required="" value="<?php echo $userlist[0][1]; ?>" /></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><input type="text" name="email" required=""  value="<?php echo $userlist[0][3]; ?>"/></td>
					</tr>
					<tr>
					</tr>

					<tr>
						<th>File:</th>
						<td><input type="file" name="file" required="" value="" /></td>
						<!-- <td><?php echo $userlist[0][4]; ?></td> -->

					</tr>


					<tr>
						<td><input onclick="return(submitreg());" type="submit" name="submit" value="update" /></td>
					</tr>



				</tr>

			</tbody>

		</table>

	</form></div>

	
</body>
</html>
