<?php

include ("connection.php");
session_start();

	if(!isset($_SESSION['sid']))
	{
		?>
<!DOCTYPE html>
<html>
<?php
	include("head.php");
	include("header.php");
?>
<body background="images\bg4.png">
  <div class="hero_area">
 
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="side_heading">
        <h5>
          G
		  O
		  F
		  O
		  O
		  D
		  Y
        </h5>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 offset-md-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  01
                </li>
              
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box b-1">
                    <img src="images\Gofoody2.png" alt="">
                  </div>
                </div>
              
              </div>
            </div>
          </div>
          <div class=" col-md-5 offset-md-1">
            <div class="detail-box">
              <h2><b>
                "PET full MOOD cool"
              </h2></b>
              <p>
               Food is the need of every living organismthe. human body needs a variety of the following five nutrients – protein, carbohydrate, fat, vitamins, and minerals – which comes from the Food we eat to stay healthy, active, and productive.
              </p>

              <div class="btn-box">
                <a href="contact.php" class="btn-1" target="_blank">
                  Contact Us
                </a>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
             <b> <h1>
                Our <br>
                Service
              </b></h1>
              <hr>
            </div>
			<br>
			<h4><b>"Satisfy your hunger with FOODIES"</b></h4>
			<ul>
			<li>Fast & Reliable Delivery</li>
			<li>Various Menu Choice</li>
			<li>Flexible Ordering Options</li>
			 <p>
              Here, Clear visuals showing what users can order & clear focus on the Indian market.we provides Excellent search features and clear commitment to offer quality food.also we want to like provide Delivery On time and get high Customer Satisfaction.one more that Flexibility—allowing users to order more than just restaurant food
            </p>
            
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/aboutFood.png" alt="mk">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- dish section -->

  <section class="dish_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="dish_container">
            <div class="box">
              <img src="images/dish1.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish2.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish3.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <b><h1>
                <br>
                 <br>
                About Restaurant
            </b>  </h1>
            </div>
            <p>      
				A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services.
            </p>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end dish section -->

  
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

<!DOCTYPE html>
<html>
<?php
	include("head.php");
	include("header.php");
?>
<body background="images\bg4.png">
  <div class="hero_area">
 
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="side_heading">
        <h5>
          G
		  O
		  F
		  O
		  O
		  D
		  Y
        </h5>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 offset-md-1">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  01
                </li>
              
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box b-1">
                    <img src="images\Gofoody2.png" alt="">
                  </div>
                </div>
              
              </div>
            </div>
          </div>
          <div class=" col-md-5 offset-md-1">
            <div class="detail-box">
              <h2><b>
                "PET full MOOD cool"
              </h2></b>
              <p>
               Food is the need of every living organismthe. human body needs a variety of the following five nutrients – protein, carbohydrate, fat, vitamins, and minerals – which comes from the Food we eat to stay healthy, active, and productive.
              </p>

              <div class="btn-box">
                <a href="contact.php" class="btn-1" target="_blank">
                  Contact Us
                </a>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
             <b> <h1>
                Our <br>
                Service
              </b></h1>
              <hr>
            </div>
			<br>
			<h4><b>"Satisfy your hunger with FOODIES"</b></h4>
			<ul>
			<li>Fast & Reliable Delivery</li>
			<li>Various Menu Choice</li>
			<li>Flexible Ordering Options</li>
			 <p>
              Here, Clear visuals showing what users can order & clear focus on the Indian market.we provides Excellent search features and clear commitment to offer quality food.also we want to like provide Delivery On time and get high Customer Satisfaction.one more that Flexibility—allowing users to order more than just restaurant food
            </p>
            
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/aboutFood.png" alt="mk">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- dish section -->

  <section class="dish_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="dish_container">
            <div class="box">
              <img src="images/dish1.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish2.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish3.jpg" alt="">
            </div>
            <div class="box">
              <img src="images/dish4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <b><h1>
                <br>
                 <br>
                About Restaurant
            </b>  </h1>
            </div>
            <p>      
				A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services.
            </p>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end dish section -->

  
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