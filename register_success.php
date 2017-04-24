<?php
require 'core.inc.php';
require 'connect.inc.php';
if(loggedin()){
	$username=getuserfield('username');
	echo 'you are logged in.
	<a href="logout.php" ><input type="button" value="Log out"></a><br>';
	echo 'welcome '.$username;
}
else{
include 'loginform.inc.php';
}
?>