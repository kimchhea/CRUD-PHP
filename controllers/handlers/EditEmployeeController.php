<?php 
require_once './models/Employee.php';
require_once './database/db.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve the submitted data
   $data = $_POST;
  print_r ($data);
  $id = $_POST['employee_id'];
    $firstname = $data['first_name'];
    $lastname = $data['last_name'];
    $displayname = $data['display_name'];
    $password = $data['password'];
    $phone_number = $data['phone_number'];
    if (empty($id) || empty($displayname)) {
        die("Invalid input data!");
    }
    $employee = new Employee($conn);
    if ($employee->updateEmployee($id, $firstname, $lastname, $displayname, $password, $phone_number)) {
        echo "Employee updated successfully!";
        header("Location: /"); // Redirect back to home
        exit();
    } else {
        echo "Error updating employee.";
    }
}
?>
