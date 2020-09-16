<?php

require_once "database.class.php";

class Admin extends Database{

	public $id,$name,$username,$password;

	public function login()
	{
		$sql = "select * from user_login where username='$this->username' and password='$this->password'";
		$udata = $this->select($sql);
		if (count($udata) == 1) {
			session_start();
			$_SESSION['admin_id']=$udata[0]->id;
			$_SESSION['admin_username'] = $udata[0]->username;
			$_SESSION['admin_name'] = $udata[0]->name;
			$_SESSION['login_message'] = "Welcome ," . $udata[0]->name;
			header('location:dashboard.php');

		} else {
			return "Login Failed";
		}
	}
}


?>