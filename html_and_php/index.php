<?php
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin()){
	$username=getuserfield('username');
	echo 'you are logged in.
	<a href="logout.php" ><input type="button" value="Log out"></a><br>';
	echo 'welcome '.$username."<br>";
	$fine=getuserfield2('fine');
	echo $fine;
	if(preg_match('/lib/', $username)){
		header('Location: library.php');
	}
	echo $fine;
	if(preg_match('/account/', $username)){
		header('Location:test2.php');
	}
	if(!preg_match('/lib/', $username) and !preg_match('/account/', $username)){
		header('Location: student.php');
	}
	
}
else{
include 'loginform.inc.php';
}
?>

