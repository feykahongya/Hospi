<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['laboratory'])&&!empty($_SESSION['type'])) {
	header("Location: laboratory/");
}
elseif (!empty($_SESSION['doctor'])&&!empty($_SESSION['type'])) {
	header("Location: doctor/");
}
elseif (!empty($_SESSION['reception'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
elseif (!empty($_SESSION['bursar'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System - Login</title>
	<style type="text/css">
	body
	{
		background-color: gray ;
	}
		.wrapper
		{
			height: 250px;
			width: 700px;
			background-color: white;
			border: 1px solid #C2C5BA;
			margin: 0 auto;
			margin-top: 150px;
			background-color: blue;
			font-family: time new roman;
			border: 15px solid yellow;
			border-radius: 20px 20px 20px 20px;
		}
		.left
		{
			height: 170px;
			width: 400px;
			border-right: 1px solid #C2C5BA;
			float: left;
			font-family: Arial;
			font-size: 25px;
			text-align: center;
			padding-top: 80px;
		}
		.right
		{
			height: 250px;
			width: 299px;
			float: left;
			text-align: center;
			font-family: Arial;
			background-color: darkblue;
			
		}
		hr
		{
			border-bottom: 1px solid #ccc;
			border-top: 1px solid white;
		}
		.input
		{
			height: 30px;
			width: 80%;
			padding-left: 20px;
		}
		.btn
		{
			height: 35px;
			width: 90%;
			border: 0;
			background-color: #408080;
			margin: 0;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
		
		
	</style>
</head>
<body>
<div class="wrapper">
	<div class="left">
		Hospital Management System<br><br>(HMS)
	</div>
	<div class="right">
		<h3>Login Here</h3><hr>
		<div id="fnav">
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Enter Username"
			style="border: 5px solid black;"><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password"
			style="border: 5px solid black;"><br><br>
			<div id="logid">
			<input type="submit" class="btn" name="btn" value="Login"><br>
			</div>
		</form>
		</div>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 } 
		 ?>
	</div>
</div>
</body>
</html>