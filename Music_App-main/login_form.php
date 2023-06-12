<?php 

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
	$name = mysqli_escape_string($conn, $_POST['name']);
	$email = mysqli_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);
	$user_type = $_POST['user_type'];

	$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){

		$row = mysqli_fetch_array($result);

		if ($row['user_type'] == 'admin') {

			$_SESSION['admin_name'] = $row['name'];
			header('location:music.php');

		}elseif($row['user_type'] == 'user') {

			$_SESSION['user_name'] = $row['name'];
			header('location:home.php');
		}
	}else{
		$error[] = 'incorrect email or password!';
	}

};
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.form-container{
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 20px;
			padding-bottom: 60px;
			background: #eee;
		}
		.form-container form{
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
			background: #fff;
			text-align: center;
		}
		.form-container form h3{
			font-size: 30px;
			text-transform: uppercase;
			margin-bottom: 10px;
			color: #333;
		}
		.form-container form input{
			width: 100%;
			padding: 10px 15px;
			font-size: 17px;
			margin: 8px 0;
			background: #eee;
			border-radius: 5px;
		}
		.form-container form .form-btn{
			margin-top: 15px;
			width: 200px;
		    height: 50px;
		    border: 2px solid #e91e80;
		    outline: none;
		    border-radius: 20px;
		    background: #e91e80;
		    color: #eee;
		    cursor: pointer;
		    transition: .3s linear;
		}
		.form-container form .form-btn:hover{
			border: 2px solid #e91e80;
		    background: none;
		    color: black;
		}
		.form-container form p{
			margin-top: 10px;
			font-size: 20px;
			color: #333;
		}
		.form-container form p a{
			color: crimson;
		}
	</style>
</head>
<body>
	<div class="bg-dark text-center">
		<div class="container">
			<div class="d-sm-flex">
				<img class="img-fluid w-50" src="img/pexels-hendrik-b-744318.jpg">
				<div class="form form-container">
					<form action="" method="post">
						<h3>login</h3>
						<?php
						if(isset($error)){
							foreach ($error as $error) {
								echo "<span class='error-msg'>'.$error.'</span>";
							};
						};

						?>
						<input type="email" name="email" required placeholder="enter your email">
						<input type="password" name="password" required placeholder="enter your password">
						<input type="submit" value="Login" name="submit" class="form-btn">
						<p>don't have an account? <a href="register_form.php">register now</a></p>
					</form>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>