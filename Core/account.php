<?php

class account{
	private $id_admin;
	private $id_user;
	private $id_officer;
	private $username;
	private $password;

public function getid_admin()
{
	return $this->id_admin;
}
public function getid_user()
{
	return $this->id_user;
}
public function getid_officer()
{
	return $this->id_officer;
}
public function getusername()
{
	return $this->username;
}
public function getpassword()
{
	return $this->password;
}
public function setid_admin()
{
	$this->id_admin = $id_admin;
}
public function setid_user()
{
	$this->id_user = $id_user;
}
public function setid_officer()
{
	$this->id_officer = $id_officer;
}
public function setusername()
{
	$this->username = $username;
}
public function setpassword()
{
	$this->password = $password;
}
}