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
		//echo $user1[1];
?>

<!DOCTYPE html>
<html>
<title>FOODIES</title>
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
	position: fixed;
	width: 100%;
	margin: 0px;
	bottom: 0%;
	
}-->
</style>

<h3 align=center><b>My Order</b></h3><br>

<table align="center" style="margin-bottom: 70px;">
<form method="POST">
	<script>
	if(window.history.replaceState)
	{
		window.history.replaceState(null,null,window.location.href);
	}
	</script>
	<?php
				
			if(isset($_GET['prod']))
			{
				$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
			
			$rs=$_GET['prod'];
		
		$result=mysqli_query($conn,"select * from food where Food_id='".$_GET['prod']."'");	
		
			
		$row=mysqli_fetch_array($result);
				$r1=$row[0];
				$r2=$row[1];
				$r3=$row[2];
				$r4=$user1[1];
				
			$ord=mysqli_query($conn,"select * from cart where Food_id='".$_GET['prod']."'");
			$ord1=mysqli_fetch_array($ord);
			
			$a=!is_null($ord1) && is_array($ord1) && isset($ord1[1]);
			if($a && $ord1[1]==$_GET['prod'])
			{
			echo "";
			}
			else
			{
			$sql = mysqli_query($conn,"insert into cart(Food_id,Food_name,Price,Quantity,User_name) values ('".$r1."','".$r2."','".$r3."','".$quantity."','".$r4."')");
			}
			
			$crt=mysqli_query($conn,"select * from cart where Food_id='".$_GET['prod']."'");
			$crt1=mysqli_fetch_array($crt);
			
			if(isset($_POST['update']))
			{
				mysqli_query($conn,"update cart set Quantity='".$_POST['quantity']."' where Order_id='".$crt1[0]."'");	
			}
					?>
			<tr>
			<td>
			<center><img src="images/<?php echo $row[3]; ?>" alt="Img" width="200" height="200"></center><br>
			<center> <?php  echo  $crt1[2];?> <br>
					Rs.<?php echo  $crt1[3];?><br>
					Quantity:<input type="text" name="quantity" id="quantity" size="10" value="<?php echo $quantity; ?>">
					<input type="submit" name="update" value="Update">
					
				
			<!--<center><u><a href="order.php?deleteRemove</u></center></a><br>-->
			
			<center><u><a href="payment.php?pay=<?php echo $crt1[0]; ?>">Continue with Payment</a></u></center>
		</td>
		

	</tr>

		
		
</table>

  
  <?php
			}
	}
	include("myfooter.php");
  ?>
 <!--  <div class=footer style="border: 2px solid;">
<center>


 <h4>&copy; 2023 FOODIES.All rights reserved <br>
 Contact: foodies@gmail.com</h4>
 </center>

</div>-->

 
</body>

</html>