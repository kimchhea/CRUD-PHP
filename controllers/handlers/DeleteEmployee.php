<?php 
require_once './models/Employee.php';
require_once './database/db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $employee_id = $_POST['employee_id'];
    $employee = new Employee($conn);
   $result = $employee->DeleteEmployees($employee_id);
    if ($result) {
        header('location: '.'/');
       
    } else {
        echo "Failed to delete employee.";
    }
}

?>