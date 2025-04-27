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
		$user=mysqli_query($conn,"select * from user where User_name='".$_SESSION['User_name']."'");
		$user1=mysqli_fetch_row($user);
		$dp=mysqli_query($conn,"select * from deliverypartner");
		$dp1=mysqli_fetch_row($dp);
?>

<!DOCTYPE html>
<html>


<body class="sub_page" background="images\bg4.png">
  

<style>
th,td{
	padding: 30px;
}
<!--.footer{
	background: black;
	color: white;
	text-size: 10px;
	padding: 20px;
	position: relative;
	width: 100%;
	
	bottom: 0%;
	
}-->
</style>

<?php
				
			if(isset($_GET['bill']))
			{
			
			$rs=$_GET['bill'];
			
			$result=mysqli_query($conn,"select * from payment where Payment_id='".$_GET['bill']."'");	
			$row=mysqli_fetch_array($result);
		
								
				//$dt=date("Y/m/d");
				//$tot=$r3*$r2;	
			
			$sql=mysqli_query($conn,"select * from bill where Payment_id='".$rs."'");
			$sql1=mysqli_fetch_array($sql);
			
			$a=!is_null($sql1) && is_array($sql1) && isset($sql1[3]);
			if($a && $sql1[3]==$_GET['bill'])
			{
			echo "";
			}
			else
			{
				/*$sql = mysqli_query($conn,"insert into order(Food_id,Food_name,Price,User_name) values ('".$row[0]."','".$row[1]."','".$row[2]."','".$user1[1]."')");*/
				
			$sql = mysqli_query($conn,"insert into bill(Bill_date,Bill_amount,Payment_id,Deliverypartner_name) values ('".$row[1]."','".$row[5]."','".$row[0]."','".$dp1[1]."')");
				
			}
			
				
			
				$bl=mysqli_query($conn,"select * from bill where Payment_id='".$_GET['bill']."'");
				$bl1=mysqli_fetch_array($bl);
					
				
			
					?>

<h2 align=center><b>Billing Details</b></h2><br>
<form method=POST action="feedback.php">
<table align="center" border=2px width=50%>
	
	<tr align=center>
		<td colspan=4 align=center>
		<h3><b>FOODIES</b></h3>
		</td>
	</tr>
	
	<tr>
		<td align=left> 
		<font size=4px>Name:<?php echo $user1[1]?><br>
		Contact: <?php echo $user1[4]?><br>
		Address: <?php echo $user1[6]?></font>
		</td>
		<td style="border-left-style: hidden;"></td>
		<td align=left>
		<font size=4px>
		Date: <?php echo $bl1[1]?><br>
		Delivery partner: <?php echo $dp1[1]?><br>
		Contact: <?php echo $dp1[2]?></font> 
		</td>
		<td style="border-left-style: hidden;"></td>
		
	</tr>
	<tr>
		<td colspan=2 align=center>
		<font size=4px><b>Item name 
		</td>
		
		<td align=center>
		<font size=4px><b>Quantity 
		</td>
		
		<td align=center>
		<font size=4px><b>price
		</td>
		
		
	</tr>
	<tr>
		<td colspan=2>
		<?php echo $row[2]?> 
		</td>
		
		<td align=center>
		<?php echo $row[3]?>
		</td>
		
		<td align=center>
		<?php echo $row[4]?>
		</td>
	</tr>
	
	<tr>
		<td colspan=3 align=right>
		<font size=4px><b>Grand Total
		</td>
		
		<td align=center>
		<?php echo $bl1[2]?>
		</td>
	</tr>
	
	<tr>
		<td colspan=4 align=center>
		<font size=4px color=red>Paymeny will be accepted only by Cash on Delivery...!<br><br>
		<button>Done</button>
		</td>
		
	</tr>
</table><br>



 
  <?php
	}
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