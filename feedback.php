<?php
session_start();
include("head.php");
include("header.php");
include("connection.php");

if(!isset($_SESSION['User_name']))
	{
		?> <script>
		alert("Please Login first.");
		window.location.replace('login.php');
		
		</script><?php	
	}
else
{
if(isset($_POST['submit']))
{
	$nm=$_POST['unm'];
	$m=$_POST['mail'];
	$msg=$_POST['feedback'];
	
	
	if(is_numeric($nm))
	{
?>
		<script>
		alert("Invalid Name !");
		window.location.replace('feedback.php');
		</script>
	<?php
	}
	
	else if(!filter_var($m,FILTER_VALIDATE_EMAIL))
	{?>
		<script>
		alert("Please enter Valid E-mail");
		window.location.replace('feedback.php');
		</script>
	<?php
	}
	else
	{
	$sql = mysqli_query($conn,"insert into feedback(User_name,Email,Feedback_message) values ('".$nm."','".$m."','".$msg."')");
	?><script>
		window.location.replace('thankyou.php');
		</script><?php 
	}
}	?>

<!DOCTYPE html>
<html>



<body class="sub_page" background="images\bg4.png">
  <br>
  
  
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
	
	width: 900px;
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

/* Set a style for the feedback button */
.feedbackbtn {
  background-color: skyblue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.feedbackbtn:hover {
  opacity: 1;
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

<form method="POST">
  <div class="container">
    <h3 align=center> Send Us a message </h3>
   
    <hr>

	 <label for="psw"><b>Name</b></label>
    <input type="text" placeholder="Name" name="unm" id="firstname" required />
    
     <label for="psw"><b>E-mail</b></label>
    <input type="text" placeholder="E-mail" name="mail" id="lastname" required />
	
	 <label for="feedback"><b>Feedback Message</b></label><br>
    <textarea placeholder="Enter Your Feedback" name="feedback"></textarea><br>
	
	<center><a href="thankyou.php">
    <input type="submit"  name="submit" value="submit" class="feedbackbtn">
	</a>
  </div>
</form> 
  <?php
}
include("myfooter.php");
  ?>

 
</body>

</html>