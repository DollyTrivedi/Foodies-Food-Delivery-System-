<?php
include("head.php");
include("header.php");
?>
<?php
include("connection.php");

if(isset($_POST['register']))
{
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$un=$_POST['username'];
	$cn=$_POST['contactno'];
	$mail=$_POST['email'];
	$add=$_POST['address'];
	$pass=md5($_POST['psw']);
	$cnf=md5($_POST['pswrepeat']);
	
	if(!is_numeric($cn))
	{
?>
		<script>
		alert("Number should be Numeric");
		window.location.replace('registration.php');
		</script>
	<?php
	}
	
	else if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
	{?>
		<script>
		alert("Please enter Valid E-mail");
		window.location.replace('registration.php');
		</script>
	<?php
	}
	else if($pass != $cnf && $pass <= 6)
	{?>
		<script>
		alert("Password doesn't match");
		window.location.replace('registration.php');
		</script>
	<?php 
	}
	else
	{
	$sql = mysqli_query($conn,"insert into user(First_name,Last_name,User_name,Contact,Address,Email,Password) values ('".$fn."','".$ln."','".$un."','".$cn."','".$mail."','".$add."','".$pass."')");
	?><script>
		alert("Register successful");
		window.location.replace('login.php');
		</script><?php 
	}		
}
else
{
?>
<!DOCTYPE html>
<html>
<body class="sub_page" background="images\bg4.png">
  <div class="hero_area">
  </div><br>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
	width: 800px;

  padding: 5px;
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

/* Full-width Textarea */
Textarea {
    overflow: auto;
    resize: vertical;
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background-color: #f1f1f1;
}

Textarea:focus {
  background-color: #ddd;
  outline: none;
}
</style>
</head>
<body>

<form method="post">
  <div class="container">
    <h3 align=center>Please fill this form to create an account</h3>
   
    <hr>

	 <label for="psw"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="firstname" id="firstname" required />
    
     <label for="psw"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lastname" id="lastname" required />
    
     <label for="psw"><b>User  Name</b></label>
    <input type="text" placeholder="User Name" name="username" id="username" required />
	
	<label for="contact"><b>Contact No</b></label>
    <input type="text" placeholder="Contact No" name="contactno" id="Contactno" required />

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required />
	
	
	<label for="address"><b>Address</b></label><br>
    <textarea placeholder="Address here" name="address" cols=78 required></textarea><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required />

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required />
  
    <input type="submit"  name="register" value="Register" class="registerbtn">
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php" target="_blank">Sign in</a>.</p><br>
  </div>
</form>
  
  
    <!-- footer section -->

  <?php
include("myfooter.php");
}
  ?>
</body>
</html>

