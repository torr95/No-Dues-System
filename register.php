<?php
require 'core.inc.php';
require 'connect.inc.php';
if(!loggedin()){

	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&
		isset($_POST['firstname'])&&isset($_POST['lastname'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password_again=$_POST['password_again'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($lastname)){
			if($password!=$password_again){
				echo "password do not match";
			}
			else{
				$query="SELECT username FROM users WHERE username='$username'";
				$query_run=mysql_query($query);
				if(mysql_num_rows($query_run)==1){
					echo 'username already exist';
				}
				else{
					$query="INSERT INTO users VALUES('','$username','$firstname','$lastname','$password')";
					if($query_run=mysql_query($query)){
						header('Location: register_success.php');
					}
					else{
						echo "registration failed";
					}
			}
		}
		

	}
	else{
			echo "ALL fields are required";
		}
}

?>

<form action="register.php" method="POST">
	Username :<br> <input type="text" name="username" value="<?php if(isset($username)){echo $username;}?>" ><br><br>
	Password : <br><input type="password" name="password" ><br><br>
	Password again :<br> <input type="password" name="password_again"><br><br>
	Firstname: <br><input type="text" name="firstname" value="<?php if(isset($firstname)){echo $firstname;}?>"><br><br>
	Lastname: <br><input type="text" name="lastname" value="<?php if(isset($lastname)){echo $lastname;}?>" ><br><br>
	<input type="submit" value="Register">
</form>

<?php
}
else if(loggedin()){
	echo 'you are already registered and logged in.';
}
?>