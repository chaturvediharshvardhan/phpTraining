<?php
include_once 'class.user.php';  $user = new User(); //creating oject of the class user
$url =   $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


$path=basename($url);
echo $path;
$userlist=$user->DeleteUser($path);
/*print_r($userlist);*/


if ($userlist){
	/*extract($_REQUEST);*/
	echo 'data  successful deleted <a href="/harsh/oops/home.php">Click here</a>';

} else {
	echo 'data can not be deleted.  please try again';

}



?>