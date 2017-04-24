<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

function loggedin(){
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return 1;
	}
	else
		return 0;
}
function getuserfield($field) {
	$query="SELECT $field FROM users WHERE id ='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result(($query_run), 0,$field)){
			return $query_result;
		}
	}
}
function getuserfield2($field) {
	$query="SELECT $field FROM lib  WHERE id ='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result(($query_run), 0,$field)){
			return $query_result;
		}
	}
}
function getuserfield3($field) {
	$query="SELECT $field FROM sports  WHERE id ='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result(($query_run), 0,$field)){
			return $query_result;
		}
	}
}
function getuserfield4($field) {
	$query="SELECT $field FROM mess  WHERE id ='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result(($query_run), 0,$field)){
			return $query_result;
		}
	}
}
function getuserfield5($field) {
	$query="SELECT $field FROM misc  WHERE id ='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result(($query_run), 0,$field)){
			return $query_result;
		}
	}
}
?>