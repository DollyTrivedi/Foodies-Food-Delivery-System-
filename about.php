<?php
session_start();
include ("connection.php");

	if(!isset($_SESSION['sid']))
	{
		?> 
<?php include("head.php");
include("header.php");
?>
<!DOCTYPE html>
<html>



<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
    
  </div>

	<!-- about section -->
  <section class="about_section layout_margin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
             About US  
              </h2>
              <hr>
            </div>
            <p>
              <h3>"PET full MOOD cool"</h3>
			We are leading food delivery services based on Rajkot. Our mission is to Provide Convenient and delicious meals to our customers,rigth ar their doorstep. Choose FOODY for Free food Delivery.     
          </div>
        </div>
			<div class="box">
              <img src="images/about2.png" alt="" height=100% width=100%>
            </div>	
      </div>
    </div>
</section>
 <section>
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <hr>
      </div>
    </div><br>
	<center>
	<table>
	<tr>
		<td>
	    <img src="images/dish1.jpg" alt="" >
		</td>
		<td>
	    <img src="images/dish2.jpg" alt="">	
		</td>
		<td>
	    <img src="images/dish3.jpg" alt=""><br>
		</td>
	</tr>
	<tr>
	<td align=center style="font-weight:bold;">
		Flexible Ordering Options	
	</td>
	<td align=center style="font-weight:bold;">
		Fast& Reliable Serives
	</td>
	<td align=center style="font-weight:bold;">
		Various Menu Choice
	</td>
	</tr>
	</table>
	</center>
</section><br>


  <!-- end about section -->
    <!-- footer section -->
   <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <?php
include("myfooter.php");
  ?>

 
</body>

</html>
		<?php	
	}
	else
	{
?>
<?php include("head.php");
include("header.php");
?>
<!DOCTYPE html>
<html>



<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
    
  </div>

	<!-- about section -->
  <section class="about_section layout_margin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
             About US  
              </h2>
              <hr>
            </div>
            <p>
              <h3>"PET full MOOD cool"</h3>
			We are leading food delivery services based on Rajkot. Our mission is to Provide Convenient and delicious meals to our customers,rigth ar their doorstep. Choose FOODY for Free food Delivery.     
          </div>
        </div>
			<div class="box">
              <img src="images/about2.png" alt="" height=100% width=100%>
            </div>	
      </div>
    </div>
</section>
 <section>
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <hr>
      </div>
    </div><br>
	<center>
	<table>
	<tr>
		<td>
	    <img src="images/dish1.jpg" alt="" >
		</td>
		<td>
	    <img src="images/dish2.jpg" alt="">	
		</td>
		<td>
	    <img src="images/dish3.jpg" alt=""><br>
		</td>
	</tr>
	<tr>
	<td align=center style="font-weight:bold;">
		Flexible Ordering Options	
	</td>
	<td align=center style="font-weight:bold;">
		Fast& Reliable Serives
	</td>
	<td align=center style="font-weight:bold;">
		Various Menu Choice
	</td>
	</tr>
	</table>
	</center>
</section><br>


  <!-- end about section -->
    <!-- footer section -->
   <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <?php
include("myfooter.php");
	}
  ?>
</body>
</html>