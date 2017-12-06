<?php
require_once('./models/EmployeeModel.php');

class Employee {

private $model;


public function __construct() {
	$this->model = new EmployeeModel();
}


public function loadViews() {
	//get content through the model
	//load views that match the content
	require_once('views/head.php');
	require_once('views/nav.php');
	require_once('views/emp_search.php');

	if(isset($_GET['id'])) {
		//run query method A on the model
		//load view(s) to match the model data
		$employees = $this->model->getOne($_GET['id']);
		require_once('views/emp_detail.php');

	}else if(isset($_GET['str'])) {
		//run query method B on the model
		//load view(s) to match THAT model data
		$employees = $this->model->searchEmployees($_GET['str']);
		require_once('views/search.php');

	}else{ //alphabetic list of employees, the default view
		$employees = $this->model->getAll();
		require_once('views/emp_list.php');
	}

	require_once('views/footer.php');

}

}