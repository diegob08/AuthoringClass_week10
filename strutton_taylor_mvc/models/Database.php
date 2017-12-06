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
	//$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '%".st."%' ORDER BY emp_lname ASC";

	//probably seperate the getting, escaping, and results into seperate functions
	/*public function searchEmployees($val) {
		$str = "SELECT * FROM ".$this->table." WHERE emp_lname LIKE '%".$val."%' ORDER BY emp_lname ASC";
		$sql = $this->prepQueryString($str);
		$results = mysqli_query($this->connection, $sql);
		return $results;
	}*/

	public function searchEmployees($searchStr) {
            $sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '%$searchStr%' OR emp_fname LIKE '%$searchStr%' ORDER BY emp_lname ASC";
            $searchStr = $this->prepQueryString($sql);

            //prepQueryString() breaks the $sql string. By running the function, the result becomes:
            //
            //SELECT * FROM tbl_employees WHERE emp_lname LIKE \'%r%\' OR emp_fname LIKE \'%r%\' ORDER BY emp_lname ASC
            //
            //Since we need single quotes within this string, mysqli_real_escape_string() will ultimately see it as a possible issue and add slashes.

            //By leaving it as $sql (and not running prepQueryString()), the result becomes:
            //
            //SELECT * FROM tbl_employees WHERE emp_lname LIKE '%r%' OR emp_fname LIKE '%r%' ORDER BY emp_lname ASC
            //
            //Which is proper formatting and works when searching.


            //$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE \"%$searchStr%\" OR emp_fname LIKE \"%$searchStr%\" ORDER BY emp_lname ASC";
            //Also does not work as this is not proper formatting for SQL.

            $result = mysqli_query($this->connection, $sql);
            return $result;
    }


}
