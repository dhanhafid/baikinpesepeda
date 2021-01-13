<?php
<<<<<<< HEAD

class registrasi{

	private $registeredemail = 'baikin@gmail.com';

	protected $inputusername;
	protected $inputemail;
	protected $inputpassword;


	public function __construct( $inputusername, $inputemail, $inputpassword){
		$this->inputusername = $inputusername;
		$this->inputemail = $inputemail;
		$this->inputpassword = $inputpassword;
	}
	public function get_inputusername(){
		return $this->inputusername;
	}
	public function get_inputemail(){
		return $this->inputemail;
	}
	public function get_inputpassword(){
		return $this->inputpassword;
	}
	public function registeredemail(){
		if($this->inputemail === $this->registeredemail ){
			return true;
		}else{
			return false;
		}
	}
	public function check(){
		if($this->registeredemail()){
			echo'email has been used';
		}else{
			echo'Success';
		}
	}
}
$date = new registrasi ('sepeda11', 'baik@gmail.com', 'b1234');
echo $date->get_inputusername();
echo "<br>";
echo $date->get_inputemail();
echo "<br>";
echo $date->get_inputpassword();
echo "<br>";
$date->check();
?>
=======
require 'config\registerController.php';
session_start();
if(isset($_POST['submit'])){
	$register = new RegisterController;
	$register->getData($_POST['username'],$_POST['name'],$_POST['password'],$_POST['email']);
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>baikinpesepeda</title>
	<link rel="stylesheet" href="../views/css/style-login.css">
</head>
<body class="bg-primary">
	<div class="container">	
		
		<p><b>Daftar</b></p>

		<form method="post" action="register.php">
			<?php 
				if(isset($_POST['submit'])){
					echo "<div class='alert' style='color: red; margin-bottom: 5px;' role='alert'>
					'<b>".$register->message."</b>'
					</div>";
				}
			?>
		
			<div class="form-group">
				<input type="email" name="email" placeholder="Email" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>

			<input type="submit" name="submit" value="Register" class="btn btn-outline-light btn-block">
			
			<div class="reg">
				<b>Sudah punya akun? <a href="login.php">Login</a></b>
			</div>
		</form>

	</div>
</body>
</html>
>>>>>>> main
