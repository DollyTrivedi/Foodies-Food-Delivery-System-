<?php
session_start();
include("head.php");
include("header.php");
include ("connection.php");

	if(!isset($_SESSION['User_name']))
	{
		?> <script>
		alert("Please Login first.");
		window.location.replace('login.php');
		
		</script><?php	
	}
	else
	{
?>

<!DOCTYPE html>
<html>
<!--<style>
.footer{
	background: black;
	color: white;
	text-size: 10px;
	padding: 20px;
	position: fixed;
	width: 100%;
	margin: 0px;
	bottom: 0%;
	
}
</style>-->

<body class="sub_page" background="images\bg4.png">
  <table style="margin-bottom: 100px;">
 

<div style="min-height:400px">
<br><br><br><br>

<center><font size="+6">THANKS FOR ORDERING THE FOOD,ENJOY IT!!!</font></center>
 </div>
 </table>
  <?php
	}
include("myfooter.php");
  ?>
   <!--<div class=footer style="border: 2px solid;">
<center>


 <h4>&copy; 2023 FOODIES.All rights reserved <br>
 Contact: foodies@gmail.com</h4>
 </center>

</div>-->
 
 
</body>

</html>