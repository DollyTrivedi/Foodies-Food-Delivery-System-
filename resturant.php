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
		//echo $_SESSION['User_name'];
?>

<!DOCTYPE html>

<html>



<style>

td{
	text-align: center;
}

.cat{
	border: 1px solid #c2c2c2;
	padding: 0 0 35px 0;
	margin-top: 30px;
	border-left: none;
	border-right: none;
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


<body  background="images\bg4.png" class="sub_page">
  <div class="hero_area">
    
  </div>

  <!-- dish section -->
  <section class="dish_section layout_padding">
    <div class="container">
      <div class="row">
			<div class="box">
			<?php
			$sql=mysqli_query($conn,"select * from restaurant");
				$row1=mysqli_fetch_array($sql);
				?>
			<!--<img src="images/<?php echo $row[4]; ?>" alt="Img" width="200" height="200"><br>-->
             <img src="images/<?php echo $row1[4]; ?>" alt="" height=100% width=100%>
            </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
				<?php
				echo "$row1[1]";?>
              </h2><br>
            </div>
			<h5 align=left>
			Address : <?php echo $row1[2]; ?><br>
			Phone no : <?php echo $row1[3]; ?><br>
			</h5>
            <a href="https://www.tgmhotel.com/" target="_blank">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end dish section -->

  <!-- hot section -->

  <section class="hot_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Categories
        </h2>
        <hr>
      </div>
    </div>
	
	<div class="cat">
	
  <div class="box">
					<div class="detail-box">
		<table width=100%>
			<tr>
			<?php
			$result=mysqli_query($conn,"select * from category");
					while($row=mysqli_fetch_row($result))
					{
					?>
				<td>
				<a name="cat1" href="menu.php?cat=<?php echo "$row[1]"?>" target=""><?php echo "$row[1]";?></a>
				</td>
				<?php
						}
						?>
			</tr>
		</table>
		</div>
				</div>
	
	</div>
    
  </section>

 
<!-- footer section --> 
  <?php
include("myfooter.php");
	}
  ?>
  <!-- <div class=footer style="border: 2px solid;">
<center>


 <h4>&copy; 2023 FOODIES.All rights reserved <br>
 Contact: foodies@gmail.com</h4>
 </center>

</div>-->
 

 
</body>