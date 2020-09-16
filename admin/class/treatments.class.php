<?php

require_once "database.class.php";

class Treat extends Database{

	public $id,$treatment,$short_description,$doctorname, $photo;

	public function save()
	{
		$sql = "insert into treatments (treatment,short_description, doctorname,photo) values ('$this->treatment','$this->short_description','$this->doctorname','$this->photo')";
		$status = $this->insert($sql);
		if ($status) {
			return "Treatment detail Inserted Successfully";
		} else {
			return "Treatment detail Can Not Insert";
		}

	}

	public function selectAlltreat()
	{
		$sql = "select * from treatments";
		return $this->select($sql);
	}


	public function deletetreat()
	{
		$sql = "delete from treatments where id='$this->id'";
		$status = $this->delete($sql);
		if ($status) {
			return "Treatment detail Deleted Successfully";
		} else {
			return "Treatment detail Can Not Delete";
		}

	}

	public function selecttreatById() {
		$sql = "select * from treatments where id='$this->id'";
		return $this->select($sql);
	}
	public function selectReadtreatById($bid) {
		$sql = "select * from treatments where id='".$bid."'";
		return $this->select($sql);
	}

	public function updatetreat()
	{
		$sql = "update treatments set treatment='$this->treatment',photo='$this->photo', short_description='$this->short_description',doctorname='$this->doctorname' where id='$this->id'";
			$status =  $this->update($sql);
			// echo $status;
			if ($status) {
				return "Treatment detail Updated Successfully";
			} else {
				return "Treatment detail Can Not Update";
			}
	}
	public function selectthreetreat() {
		$sql = "select * from treatments limit 3";
		return $this->select($sql);
	}
	
	

	
	
}


?>