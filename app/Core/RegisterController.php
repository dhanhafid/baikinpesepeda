<?php 
require __DIR__ . '/../Service/UserService.php';

class RegisterController extends UserService{
	protected $username;
	protected $name;
	protected $password;
	protected $email;
	public $message;

	public function getData( $username, $name, $password, $email){
		$this->username = $username;
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username) || empty($this->name) || empty($this->password) || empty($this->email)){
			$this->message = 'Data Must be Filled';
			return $this->message;
			header('location:register.php');
		} else{
			return $this->Register();

		}
	}

	public function Register(){
		$row = $this->SQLValidateEmail($email)->FetchArray();
		if($row['email'] == $this->email){
			$this->message = 'Available Email';
			return $this->message;
			header('location:register.php');
		}else{
			$sql = $this->SQLRegister( $this->username, $this->name, $this->password, $this->email);
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			header('location:administrator.php');
		}

	}
}
?>