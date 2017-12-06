<?php

require_once('Database.php');

class EmployeeModel extends Database {


public function __construct() {
	parent::__construct();
	$this->table = 'tbl_employees';
}


}