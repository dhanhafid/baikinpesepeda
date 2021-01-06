<?php

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