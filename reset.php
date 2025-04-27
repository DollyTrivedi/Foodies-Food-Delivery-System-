<?php
include("connection.php");
include("head.php");
include("header.php");


	if(isset($_POST['reset']))
	{ 

			$un = $_POST['usernm'];
			$pn = md5($_POST['newpass']);
			$cnp = md5($_POST['confirmpass']);
			if($pn==$cnp) 
			{
				
				$update = "UPDATE user SET Password = '$pn' WHERE User_name = '$un' ";
				$result = mysqli_query($conn, $update);?>
				<script>
				window.location.replace('login.php');</script>
			<?php
			}
			
			else
			{?>
				<script>
				alert("Password not Match.");
				window.location.replace('reset.php');</script>
			<?php
			}
	}


?>

<!DOCTYPE html>
<html>


<body class="sub_page" background="images\bg4.png">
 
 <!-- Reset form  -->
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
	width:500px;
	
  padding: 16px;
  
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
    <h3 align=center>Reset Your Password </h3>
   
    <hr>
	<label for="psw"><b>Enter username</b></label>
    <input type="text" placeholder="Enter Username" name="usernm" id="newpass" required>

	
     <label for="psw"><b>Enter New Password</b></label>
    <input type="password" placeholder="Enter New Password" name="newpass" id="newpass" required>

    <label for="psw"><b>Retype-Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirmpass" id="confirmpass" required>
	
    <button type="submit" class="registerbtn" name="reset">Reset</button>

  </div>
  
  
</form><br>

  <!-- End Reset form  -->
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