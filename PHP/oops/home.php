<?php
session_start();
include_once 'class.user.php';
$user = new User();
$userlist=$user->GetUser();

$c=count($userlist);



   // echo'<pre>';print_r($userlist);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><table>
		<thead>
			<tr>
				<th> User Id</th>
				<th>User Name</th>
				<th>Email</th>
				<th>File</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($userlist as $user){?>
				<tr>
					<td><?php echo $user[0]?></td>
					<td><?php echo $user[1]?></td>
					<td><?php echo $user[3]?></td>
					<td><!-- <?php echo $user[4]?> --><img src="images/<?php echo $user[4]?>" width="50px;" height="50px"></td>
					<td><a href="update.php/<?php echo $user[0]?>">edit</a></td>
					<td><a href="delete.php/<?php echo $user[0]?>">delete</a></td>
					
				<?php } ?>
			</tr>

			<tr><td><a href="login.php">logout</a></td></tr>
		</tbody>	
		
		

		
	</table></center>
</body>
</html>