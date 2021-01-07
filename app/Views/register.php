<?php
require __DIR__ . '/../Core/RegisterController.php';

session_start();

if(isset($_POST['submit'])){
	$register = new RegisterController;
	$register->getData($_POST['username'],$_POST['name'],$_POST['password'],$_POST['email']);
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Register</title>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			echo "$register->message";
			}
	?>

		<h1>Form Register</h1>
		<form method="post" action="register.php">
			<div>
				<input type="email" name="email" placeholder="Email">
			</div>

			<div>
				<input type="text" name="username" placeholder="Username">
			</div>

			<div>
				<input type="text" name="name" placeholder="Name">
			</div>

			<div>
				<input type="password" name="password" placeholder="Password">
			</div>

				<input type="submit" name="submit" value="Register">
			</form>

			<div>
				<a href="login.php">Already Account?</a>
			</div>		
</body>
</html>