<?php 
require_once './models/Employee.php';
$employee = new Employee($conn);
$id = $_POST['employee_id'];
$query = "SELECT * FROM employee WHERE employee_id = ?";
$result = $employee->GetonID($query, $id);
// print_r ($result);

require_once "./views/pages/EditEmployee.php";

?>
