<?php
include ("connection.php");
session_start();

if(isset($_SESSION['User_name']))
{
	unset($_SESSION['User_name']);
	//session_destroy();
	//$_SESSION['User_name']="";
	header("Location:login.php");
}
else
{
	echo"on";
}
?>