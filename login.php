<?php
session_start();
	include("head.php");
	include("header.php");
	include ("connection.php");
	if(isset($_POST['login']))
	{
	$un = $_POST['usernm'];
	$pn = md5($_POST['pass']);
	$rs = mysqli_query($conn,"select * from  user where User_name='".$un."' and Password='".$pn."'");
	$cnt=mysqli_num_rows($rs);
	if($cnt >= 1)
	{
		$_SESSION['User_name']=$un;
		//header("Location:resturant.php");
		?><script>
		window.location.replace('resturant.php');
		</script><?php
	}
	else?>
		<script>
		alert("Incorrect username or password");
		</script><?php
	}
?>
<!DOCTYPE html>
<html>
 
<body class="sub_page" background="images\bg4.png">
 <div class="hero_area">
  
	</div><br>
	
    <!-- end header section -->

	<!-- Login Form -->
	
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
	width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: skyblue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<form method="post">
  <div class="container">
    <h3 align=center>Login</h3>
	
	<hr>
     <label for="psw"><b>User  Name</b></label>
    <input type="text" placeholder="User Name" name="usernm" id="uname" required />

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="password" required />

   	
    <input type="submit"  name="login" value="Login" class="registerbtn" />
	
  </div>
  
  <div class="container signin">
    <p>Forgot Password? <a href="reset.php" target="_blank">Reset</a></p>
	<p>New User? <a href="registration.php" target="_blank">Sign up</a></p>
  </div>
</form><br>
  <!--  End Login Form -->
  

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