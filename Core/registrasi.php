<?php

interface signup{
	public function registeredemail();
	public function check();
}
class verify implements signup{
	protected $inputName;
	protected $inputusername;
	protected $inputemail;
	protected $inputpassword;

	private $registeredemail = 'baikin@gmail.com';

	public function __construct($inputName, $inputusername, $inputemail, $inputpassword){
		$this->inputName = $inputName;
		$this->inputusername = $inputusername;
		$this->inputemail = $inputemail;
		$this->inputpassword = $inputpassword;
	}
	public function get_inputName(){
		return $this->inputName;
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
$date = new verify ('sepeda', 'sepeda11', 'baik@gmail.com', '1234');
echo $date->get_inputName();
echo "<br>";
echo $date->get_inputusername();
echo "<br>";
echo $date->get_inputemail();
echo "<br>";
echo $date->get_inputpassword();
echo "<br>";
$date->check();
?>