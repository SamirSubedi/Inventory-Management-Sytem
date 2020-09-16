<?php

require_once "database.class.php";

class Admin extends Database{

	public $id,$name,$post,$contact,$photo;

	public function save()
	{
		$sql = "insert into team_member (name,post,contact,photo) values ('$this->name','$this->post','$this->contact','$this->photo')";
		$status = $this->insert($sql);
		if ($status) {
			return "Your Person Detail Inserted Successfully";
		} else {
			return "Your Person Detail Can Not Insert";
		}

	}

	public function selectAllAdmin()
	{
		$sql = "select * from team_member";
		return $this->select($sql);
	}
	public function selectAdminById() {
		$sql = "select * from team_member where id='$this->id'";
		return $this->select($sql);
	}


	public function deleteAdmin()
	{
		$sql = "delete from team_member where id='$this->id'";
		$status = $this->delete($sql);
		if ($status) {
			return "Your Person Deleted Successfully";
		} else {
			return "Your Person Can Not Delete";
		}

	}
	public function updateAdmin()
	{
		$sql = "update team_member set name='$this->name',post='$this->post',contact='$this->contact',photo='$this->photo' where id='$this->id'";
			$status =  $this->update($sql);
			// echo $status;
			if ($status) {
				return "Your Person Updated Successfully";
			} else {
				return "Your Person Can Not Update";
			}
	}

	public function selectAllAdminUserId()
	{
		$sql = "select * from user_login where id ='$this->id'";
		return $this->select($sql);
	}
	public function updateAdminUser()
	{
		$sql = "update user_login set name='$this->name',username='$this->username',password='$this->password' where id='$this->id'";
			$status =  $this->update($sql);
			if ($status) {
				return "Account Updated Successfully";
			} else {
				return "Account Can Not Update";
			}
	}
	public function selectAllAdminUser()
	{
		$sql = "select * from useradmin";
		return $this->select($sql);
	}
		
}


?>