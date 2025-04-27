<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Header</title> 
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
           <img src="images/foodlogo.png" alt="" height=80px width=800px />
            <span>
             <h1> FOODIES <h1>
            </span>
          </a>

           <?php
			  if(isset($_SESSION['User_name']))
			  {
			  ?>
		  <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            
			
			<div id="myNav" class="overlay">
              <div class="overlay-content">
			 
			     <a href="index.php">HOME</a>
                 <a href="resturant.php">Restaurant</a>
                 <a href="about.php">About Us</a>
                 <a href="contact.php">Contact us</a>
				 <a href="userlogout.php">Logout</a>
				 
				
			  
			  
				  
			
              </div>
            </div>
          </div>
		  <?php } 
		 else
			  {
				  ?>
				  <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            
			
			<div id="myNav" class="overlay">
              <div class="overlay-content">
			 
			     <a href="index.php">HOME</a>
                 <a href="registration.php">Sign up</a>
				 <a href="login.php">Login</a>
                 <a href="about.php">About Us</a>
                 <a href="contact.php">Contact us</a>
				 
              </div>
            </div>
          </div>
			 
			  <?php } ?>
		  
		  
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  </body>
  </html>