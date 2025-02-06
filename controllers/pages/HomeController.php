<?php 
require_once "./models/Employee.php";
$employee = new Employee($conn);
$query = 'SELECT * FROM employee';
$employees = $employee->GetAllEmployees($query);
require_once './views/pages/HomePage.php';
?>