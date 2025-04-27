<?php
include ("connection.php");
session_start();

	if(!isset($_SESSION['sid']))
	{
		?>
		
<?php
	include("head.php");
	include("header.php");
?>
<!DOCTYPE html>
<html>
<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <h3 align=center><b>Contact Details</b></h3><br>
        <div class="col-md-5">
          <div class="contact_box">
	
            <a href="">
              <div class="img-box">
                <img src="images/location.png" alt="">
              </div>
			  
              <h6>
				S.G. Highway near <br>
				Iscon temaple <br>
				Ahemdabad
              </h6>
		 
            </a>
			
            <a href="">
              <div class="img-box">
                <img src="images/call.png" alt="">
              </div>
              <h6>
                (+91) 8799393233
              </h6>
            </a>

            <a href="">
              <div class="img-box">
                <img src="images/envelope.png" alt="">
              </div>
              <h6>
                foodies@gmail.com
              </h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- end contact section -->

 
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
<?php
	include("head.php");
	include("header.php");
?>
<!DOCTYPE html>
<html>
<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <h3 align=center><b>Contact Details</b></h3><br>
        <div class="col-md-5">
          <div class="contact_box">
	
            <a href="">
              <div class="img-box">
                <img src="images/location.png" alt="">
              </div>
			  
              <h6>
				S.G. Highway near <br>
				Iscon temaple <br>
				Ahemdabad
              </h6>
		 
            </a>
			
            <a href="">
              <div class="img-box">
                <img src="images/call.png" alt="">
              </div>
              <h6>
                (+91) 8799393233
              </h6>
            </a>

            <a href="">
              <div class="img-box">
                <img src="images/envelope.png" alt="">
              </div>
              <h6>
                foodies@gmail.com
              </h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- end contact section -->
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