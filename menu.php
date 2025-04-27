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

<h2 align=center><b>Menu </b></h2><br>

<table align="center" style="margin-bottom: 240px;">
	<tr>
	<?php
			if(isset($_GET['cat']))
			{
			$result=mysqli_query($conn,"select * from menu where Category_name='".$_GET['cat']."'");
					while($row=mysqli_fetch_array($result))
					{	
					?>
		<td>
			<a href="product.php?menu1=<?php echo "$row[1]";?>"><h2 align=center><img src="images/<?php echo $row[2]; ?>" alt="Img" width="200"></a><br>
			<!--<a href="product.php" ><img src="images/Sandwich/menu.png" alt="" width=200px;></a><br>-->
			<a href="product.php?menu1=<?php echo "$row[1]";?>&cat1=<?php echo $_GET['cat'] ?>"><h2 align=center><?php echo "$row[1]";?></h2></a>
		</td>
		
		<?php
					}
			}
		?>
	</tr>
	
	
</table>

   <!-- footer section -->

  <?php
	}
include("myfooter.php");
  ?>

<!-- <div class=footer style="border: 2px solid;">
<center>


 <h4>&copy; 2023 FOODIES.All rights reserved <br>
 Contact: foodies@gmail.com</h4>
 </center>

</div>-->
</body>

</html>