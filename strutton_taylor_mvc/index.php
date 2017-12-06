<?php
error_reporting('E_ALL');
include("controllers/Employee.php");
$emp = new Employee();
$emp->loadViews();
?>