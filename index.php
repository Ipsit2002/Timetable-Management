<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-image:url(img6.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.footer{
			position: fixed;
			bottom: 0;
			width: 100%;
			background-color: black;
			color: white;
			text-align: center;
			padding: 10px;
			font-size: 16px;
		}
		.foo{
			margin-top:250px;
		}
		p{
			display: grid;
  			place-items: center;
		}
	</style>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="front">
	<h1 style="color:white; background-color:black;"><strong>Timetable Management System</strong></h1><br>
	</div>
	<form class="form" action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required class="admin">&nbsp;&nbsp;
		<input type="submit" name="teacher_login" value="Teacher Login" required class="teacher">&nbsp;&nbsp;
		<input type="submit" name="student_login" value="Student Login" required class="student">
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['teacher_login'])){
			header("Location: teacher_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	<div class="foo" style=" color:white; font-size: 15pt;text-align:center;text-shadow: 1px 1px 11px black; ">
	
	</div>
	<div class="footer">
		A Project by Ipsitneel Chaudhuri
	</div>
</body>
</html>
