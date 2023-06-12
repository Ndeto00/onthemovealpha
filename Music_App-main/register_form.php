<?php 

@include 'config.php';

if(isset($_POST['submit'])){
	$name = mysqli_escape_string($conn, $_POST['name']);
	$email = mysqli_escape_string($conn, $_POST['email']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);
	$user_type = $_POST['user_type'];

	$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){

		$error[] = 'user already exist!';

	}else{
		if($pass != $cpass){
			$error[] = 'password not matched!';
		}else{
			$insert = "INSERT INTO user_form(name, email, password, user_type)VALUES('$name','$email','$pass','$user_type')";
			mysqli_query($conn, $insert);
			header('location:login_form.php');
		};
	}

};

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin page</title>
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
		.form-container form input,
		.form-container form select{
			width: 100%;
			padding: 10px 15px;
			font-size: 17px;
			margin: 8px 0;
			background: #eee;
			border-radius: 5px;
		}
		.form-container form select option{
			background: #fff;
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
		.form-container form .error-msg{
			margin: 10px 0;
			display: block;
			background: crimson;
			color: #fff;
			border-radius: 5px;
			font-size: 40px;
			padding: 10px;
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
						<h3>Sign Up</h3>
						<?php
						if(isset($error)){
							foreach ($error as $error) {
								echo "<span class='error-msg'>'.$error.'</span>";
								// code...
							};
						};

						?>
						<input type="text" name="name" required placeholder="enter your name">
						<input type="email" name="email" required placeholder="enter your email">
						<input type="password" name="password" required placeholder="enter your password">
						<input type="password" name="cpassword" required placeholder="confirm your password">
						<select name="user_type">
							<option value="user">user</option>
							<option value="admin">admin</option>
						</select>
						<input type="submit" value="Sign Up" name="submit" class="form-btn">
						<p>already have an account? <a href="login_form.php">login now</a></p>
					</form>	
				</div>
			</div>
		</div>
	</div>

</body>
</html>