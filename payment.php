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
		
		//$cart=mysqli_query($conn,"select * from cart");
		//$order1=mysqli_fetch_row($cart);
		//echo $order1[0];
		
		
?>
<!DOCTYPE html>
<html>

<body class="sub_page" background="images\bg4.png">
 <br>

<style>
th,td{
	padding: 10px;
	
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

<h3 align=center><b>Payment Details</b></h3><br>
<table align="center" border=2px width=50% style="margin-bottom: 170px;">
<?php
				
			if(isset($_GET['pay']))
			{
			$rs=$_GET['pay'];
			
			
			
			$result=mysqli_query($conn,"select * from cart where Order_id='".$rs."'");	
			$row=mysqli_fetch_array($result);
				$r1=$row[2];
				$r2=$row[3];
				$r3=$row[4];
				$r4=$user1[1];
				$r5=$_GET['pay'];
				
				$dt=date("Y/m/d");
				$tot=$r3*$r2;	
			
			$sql=mysqli_query($conn,"select * from payment where Order_id='".$rs."'");
			$sql1=mysqli_fetch_array($sql);
			
			$a=!is_null($sql1) && is_array($sql1) && isset($sql1[6]);
			if($a && $sql1[6]==$_GET['pay'])
			{
			echo"";
			}
			else
			{
						
			
	
				/*$sql = mysqli_query($conn,"insert into order(Food_id,Food_name,Price,User_name) values ('".$row[0]."','".$row[1]."','".$row[2]."','".$user1[1]."')");*/
				
			$sql = mysqli_query($conn,"insert into payment(Payment_date,Food_name,Quantity,Price,Total_price,User_name,Order_id) values ('".$dt."','".$r1."','".$r3."','".$r2."','".$tot."','".$r4."','".$r5."')");	
			}
			
				$pay=mysqli_query($conn,"select * from payment where Order_id='".$_GET['pay']."'");
				$pay1=mysqli_fetch_array($pay);
				
				
					
				
			
					?>
				
<form method=POST action="billing.php?bill=<?php echo $pay1[0]; ?>">
	<tr align=center>
		<td>
			<b>product name</b>
		</td>
		
		<td>
			<b>Quantity </b>
		</td>
		<td>
			<b>Price</b>
		</td>
	
	</tr>
	
	
		
	<tr>
	<td><?php echo $pay1[2]; ?></td>
	<td><?php echo $pay1[3]; ?></td>
	<td><?php echo $pay1[4]; ?></td>
	</tr>
			

	<tr>
	<td colspan=2 align=right>
	Total Price
	</td>
	
	<td>
		<?php echo $pay1[5]; ?>
	</td>
	</tr>
	
	<tr>
	<td colspan=3 align=center>
	Payment mode : <input type=radio name="r1" required /> Cash on Delivery
	</td>
	
	</tr>
	
	<tr>
	<td colspan=3 align=center>
	
			<input type="submit"  name="bill" value="Checkout" class="feedbackbtn">
			
	<!--<center><u><a href="billing1.php?bill=<?php/* echo $pay1[0];*/ ?>">Checkout</a></u></center>-->
	</td>
	
	</tr>
	</form>

</table><br>

   
  <?php
	}
	}
	if(isset($_GET['pay']))
	{
		mysqli_query($conn,"delete from cart where Order_id='".$_GET['pay']."'");
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