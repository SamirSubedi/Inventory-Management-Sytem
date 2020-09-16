<?php

require_once "database.class.php";

class Record extends Database{

	public $id,$name,$content,$contact;

	public function save()
	{
		$sql = "insert into record (name,content,contact) values ('$this->name','$this->content','$this->contact')";
		$status = $this->insert($sql);
		if ($status) {
			return "Your Record Inserted Successfully";
		} else {
			return "Your Record Detail Can Not Insert";
		}

	}

	public function selectAllRecord()
	{
		$sql = "select * from record";
		return $this->select($sql);
	}
	public function selectRecordById() {
		$sql = "select * from record where id='$this->id'";
		return $this->select($sql);
	}


	public function deleteRecord()
	{
		$sql = "delete from record where id='$this->id'";
		$status = $this->delete($sql);
		if ($status) {
			return "Record Deleted Successfully";
		} else {
			return "Record Can Not Deleted";
		}

	}
	public function updateRecord()
	{
		$sql = "update record set name='$this->name',content='$this->content',contact='$this->contact' where id='$this->id'";
			$status =  $this->update($sql);
			// echo $status;
			if ($status) {
				return "Your Record Updated Successfully";
			} else {
				return "Your Record Can Not Update";
			}
	}
	
		
}


?>