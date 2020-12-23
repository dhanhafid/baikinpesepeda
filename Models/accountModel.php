<?php

class account{
	private $id_admin;
	private $id_user;
	private $id_officer;
	private $username;
	private $password;

public function getId_admin()
{
	return $this->id_admin;
}
public function getId_user()
{
	return $this->id_user;
}
public function getId_officer()
{
	return $this->id_officer;
}
public function getUsername()
{
	return $this->username;
}
public function getPassword()
{
	return $this->password;
}
public function setId_admin($id_admin)
{
	$this->id_admin = $id_admin;
}
public function setId_user($id_user)
{
	$this->id_user = $id_user;
}
public function setId_officer($id_officer)
{
	$this->id_officer = $id_officer;
}
public function setUsername($username)
{
	$this->username = $username;
}
public function setPassword($password)
{
	$this->password = $password;
}
}