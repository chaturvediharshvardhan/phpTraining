<?php
include "config.php";
class User{

	public $db;
	public function __construct(){
		$this->db = new mysqli('localhost', 'root', '','harsh');
		if(mysqli_connect_errno()) {
			echo "Error: Could not connect to database.";
			exit();
		}
	}
	//for registration process
	public function RegUser($name,$email,$password,$file){
		$password = md5($password);
		$sql="SELECT * FROM users WHERE email='$email'";

						//checking if the username or email is available in db
		$check =  $this->db->query($sql) ;
		$countRrow = $check->num_rows;
			//if the username is not in db then insert to the table
		if ($countRrow == 0){
			$sql1="INSERT INTO users SET name='$name', email='$email', password='$password', file='$file' ";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
			return $result;
		}
		else{return false;}
	}

	//for login process

	public function CheckLogin($email, $password){
		$password=md5($password);

		$sql2="SELECT uid from users WHERE email='$email' and password='$password'";

							 //checking if the username is available in the table
		$result = mysqli_query($this->db,$sql2);
		$userDdata = mysqli_fetch_array($result);
		$countRow = $result->num_rows;

		if($countRow == 1){

			// this login var will use for the session thing
			$_SESSION['login'] = true;
			$_SESSION['uid'] = $userData['uid'];
			return true; 

		}
		else {
			return false;
		}
	}

	//for getting the details of all the registered users

	/*** for showing the username or fullname ***/

	public function GetFullname($uid){

		$sql3="SELECT name FROM users WHERE uid = $uid";

		$result = mysqli_query($this->db,$sql3);

		$useDdata = mysqli_fetch_array($result);

		echo $userData['name'];

	}
	public function GetUser(){
		$sql4="SELECT * FROM users";
		
		$result = mysqli_query($this->db,$sql4);

		$userData = mysqli_fetch_all($result); 

		
		return $userData;

	}


	public function EditUser($id){

		$sql5="SELECT * FROM users WHERE uid=$id";
		
		$result = mysqli_query($this->db,$sql5);

		$userData = mysqli_fetch_all($result); 
		return $userData;

	}

	public function UpdateUser($id,$name,$email,$file){
		$sql6="UPDATE users SET name='$name' , email='$email' , file='$file' WHERE uid='$id'";
		$result=mysqli_query($this->db,$sql6) or die(mysqli_connect_errno()."Data cannot updated");
		return $result;
	}


	public function DeleteUser($id){
		$sql7="DELETE FROM users WHERE uid='$id' ";
		$result=mysqli_query($this->db,$sql7) or die(mysqli_connect_errno()."Data cannot be deleted");
		return $result;
	}




	/*** starting the session ***/

	public function GetSession(){

		return $_SESSION['login'];

	}

	public function Userlogout() {

		$_SESSION['login'] = FALSE;

		session_destroy();

	}
}

?>