<?php
class Database{

	protected function connect(){
		$this->conn = new mysqli('localhost','root','','bhanu');
		if ($this->conn->connect_errno != 0) {
			die('Error on database connection');
		}
	}

	public function select($sql){
		$this->connect();
		$res = $this->conn->query($sql);
		$data = array();
		if ($res->num_rows > 0) {
			while ($row = $res->fetch_object()) {
				array_push($data, $row);
			}
		}
		return $data;
	}

	public function update($sql)
	{
		$this->connect();
		$this->conn->query($sql);
		if ($this->conn->affected_rows > 0) {
			return true;
		} else {
			return false;
		}
		
	}

	public function delete($sql){
		$this->connect();
		if ($this->conn->query($sql)) {
			return true;
		} else {
			return false;
		}
		
	}

	function insert($sql){
		$this->connect();
		$this->conn->query($sql);
		if ($this->conn->affected_rows == 1 && $this->conn->insert_id != 0 ) {
			return true;
		} else {
			return false;
		}
		
	}

	public function checkInputValue($text)
	{
		$this->connect();
		$text = $this->conn->real_escape_string($text);
		$text = htmlentities($text);
		return $text;
	}
}

?>