
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Classic Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<script src="js/jquery.vide.min.js"></script>
	<!-- main -->
	<div data-vide-bg="video/Ipad">
		<div class="center-container">
			<!--header-->
			<div class="header-w3l">
				<h1>Classic Login Form</h1>
			</div>
			<!--//header-->
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>Login Here</h2>
					</div>
					<form action="login.php" method="post">
						<input placeholder="Username or E-mail" name="email" class="user" type="email" required="">
						<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
						<input  placeholder="Password" name="pass" class="pass" type="password" required="">
						<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
						<div class="sub-w3l">
							<h6><a href="#">Forgot Password?</a></h6>
							<div class="right-w3l">
								<input type="submit" value="Login" name="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//main-->

			<!--footer-->
			<div class="footer">
				<p>&copy; 2017 Classic Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<!--//footer-->
		</div>
	</div>

</body>
</html>
<?php

// establishing the MySQLi connection

 

$con = mysqli_connect("localhost","root",'','carehouse');

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sel_user = "select * from doctors where email='$email' AND pass='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['user_email']=$email;

echo "<script>window.open('1st.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}

?>

