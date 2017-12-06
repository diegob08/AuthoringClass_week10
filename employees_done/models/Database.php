<?php

require_once("./includes/config.php");

class Database {

	protected $connection;
	protected $table;
	

	public function __construct() {
		$this->connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
		if($this->connection->connect_errno) {
			die("Database connection failed: ".mysqli_error());
		}
		//$this->table = 'tbl_employees';
	}
	

	public function getAll() {
		$str = 'SELECT * FROM '.$this->table.' ORDER BY emp_lname ASC';
		$sql = $this->prepQueryString($str);
		$results = mysqli_query($this->connection, $sql);
		return $results;
	}
	

	public function getOne($id) {
		$str = 'SELECT * FROM '.$this->table.' WHERE emp_id='.$id;
		$sql = $this->prepQueryString($str);
		$result = mysqli_query($this->connection, $sql);
		return $result;
	}


	public function fetchArray($result) {
		return mysqli_fetch_array($result);
	}


	public function numRows($result_set) {
		return mysqli_num_rows($result_set);
	}


	public function insertedID() {
		return mysqli_insert_id($this->connection);
	}


	protected function prepQueryString($str) {
		$escaped = mysqli_real_escape_string($this->connection, $str);
		return $escaped;
	}


	//SQL for search
	//$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '%'.$str.'%' ORDER BY emp_lname ASC";


}