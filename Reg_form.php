<!DOCTYPE html>
<html>
<head>
	<title> Registration Form </title>


	<style type="text/css">
		body{
			margin: 0 auto;
			background-image: url(Images/ss.jpg);
			background-repeat: no-repeat;
			background-size: 100% 720px;
		}
		.container {
			width: 500px;
			height: 520px;
			text-align: center;
			margin: 0 auto;
			background-color: black;
			opacity: 0.7;
			margin-top: 30px;
			border-radius: 10px;
		}
		.container img {
			width: 120px;
			height: 120px;
			margin-top: -60px;
			margin-bottom: 30px;
		}
		input[type="password"]{
			height: 25px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;
		}
		
	
		.button {
  border-radius: 7px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 130px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
		a {
			color:#aaa;
			font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
		}
		span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(Images/u.png) no-repeat top left;
				width:433px;
				height:59px;
			}
		
	</style>
</head>

<body>
<?php

$usernameError = $passwordError = $confPasswordError = $dateError = $mobileError = $emailError = "";
$username = $password = $confpassword = $day = $month = $year = $mobile = $email = "";
$check=true;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["username"])){
	$usernameError = "Username is missing!";
	$check=false;
	} else {
	$username = $_POST["username"];
	$check=true;
	}
	if(empty($_POST["password"])){
	$passwordError = "Password is missing!";
	$check=false;
	} else {
	$password = $_POST["password"];
	$check=true;
	}
	if(empty($_POST["confpassword"])){
	$confPasswordError = "Password confirmation is missing!";
	$check=false;
	} else {
	$password = $_POST["confpassword"];
	$check=true;
	}
	if(empty($_POST["day"])||empty($_POST["month"])||empty($_POST["year"]){
	$dateError = "Date is required!";
	$check=false;
	}
	else {
	$day = $_POST["day"];
	$month = $_POST["month"];
	$year = $_POST["year"];
	$check=true;
	}
	if(empty($_POST["mobile"])){
	$mobileError = "Mobile is missing!";
	$check=false;
	} else {
	$mobile = $_POST["mobile"];
	$check=true;
	}
	if(empty($_POST["email"])){
	$emailError = "Email is missing!";
	$check=false;
	} else {
	$email = $_POST["email"];
	$check=true;
	}
	if($check==true){
	header("Location: Login_Form.php");
	}
}
?>

<h1 class="title">Tourism</h1>
<div class="container">
	<img src="Images/r.png">
	<form method="post" name="Form" onsubmit="" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<div class="form-input">
			<input type="text" name="username" placeholder="Enter Username" style=" height: 25px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;
			" required="">
			<span style="color:red"><?php echo $usernameError;?></span>
		</div>
		<div class="form-input">
			<input type="password" name="password" placeholder="Enter Password" required="">
			<span style="color:red"><?php echo $passwordError;?></span>
		</div>
		<div class="form-input">
			<input type="password" name="confpassword" placeholder="Confirm Password" required="">
			<span style="color:red"><?php echo $confPasswordError;?></span>
		</div>
		<div class="birthday">
			<input type="text" name="day" placeholder="Day" style=" height: 25px;
			width: 70px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;
			float: left;
			margin-left: 92px; " required="">
		</div>
		<div class="birthday">
			<input type="text" name="month" placeholder="Month" style=" height: 25px;
			width: 70px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;
			float: left;
			margin-left: 32px;" required="">
		</div>
		<div class="birthday">
			<input type="text" name="year" placeholder="Year" style="height: 25px;
			width: 70px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;
			float: left;
			margin-left: 32px;" required="">
			<span style="color:red"><?php echo $dateError;?></span>
		</div>
		<div class="birthday">
			<input type="text" name="mobile" placeholder="Mobile Number" style="height: 25px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;" required="">
			<span style="color:red"><?php echo $mobileError;?></span>
		</div>
		<div class="birthday">
			<input type="text" name="email" placeholder="E-mail address" style="height: 25px;
			width: 300px;
			font-size: 18px;
			margin-bottom: 20px;
			background-color: #fff;
			padding-left: 10px;
			border-radius: 4px;" required="">
			<span style="color:red"><?php echo $emailError;?></span>
		</div>
		
		
				<button class="button" type="submit" name="submit"><span>SignUp</span></button> <br>
		
		<br>
		<a href="Login_Form.html">Already have an account? Sign In</a>
	</form>
	
</div>
<div>
            <span class="reference">
                <a href="@">Contact us</a>
				<a href="@">Terms</a>
				<a href="@">Developers</a>
				<a href="@">Help</a>
				<a href="@">Cookies</a>
				<a href="@">privacy</a>

            </span>
		</div>
</body>
</html>