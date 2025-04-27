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
<!--<script>
if(window.history.replaceState)
{
	window.history.replaceState(null,null,window.location.href);
}
</script>-->
<body class="sub_page" background="images\bg4.png">
  
<style>
th,td{
	padding: 15px;
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
<h2 align=center><b>Products </b></h2><br>
<table align="center" style="margin-bottom: 100px;">
	<tr>
	<?php
			if(isset($_GET['menu1']) && isset($_GET['cat1']))
			{
			$result=mysqli_query($conn,"select * from food where Menu_name='".$_GET['menu1']."' AND Category_name='".$_GET['cat1']."'");
					while($row=mysqli_fetch_array($result))
					{	
				
					?>
		<td>
			<!--<img src="images/Sandwich/product1.png" alt="" width=300px ><br>-->
			
			<center>
			<img src="images/<?php echo $row[3]; ?>" alt="Img" width="200" height="200"><br>
			<h3 align=center><?php echo "$row[1]";?> <br>
					<?php echo " Rs. $row[2]";?><br></h3>
					
			<h2 align=center><a href="order.php?prod=<?php echo "$row[0]";?>" target=""><u> Ordernow</u></center></a></h2>
			
		</td>
		<?php
					}
			}
		?>
	</tr>	
	
</table>
   <!-- footer section -->
 
  <?php
include("myfooter.php");
	}
  ?>
 <!--<div class=footer style="border: 2px solid;">
<center>


 <h4>&copy; 2023 FOODIES.All rights reserved <br>
 Contact: foodies@gmail.com</h4>
 </center>

</div>-->
 
 
</body>

</html>