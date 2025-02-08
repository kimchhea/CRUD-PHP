<?php 
require_once './models/Employee.php';
require_once './database/db.php'; // Ensure you include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = $_POST;
$hashpasswords = password_hash($data['password'],PASSWORD_ARGON2I);
    $employee = new Employee($conn);
    $query = 'INSERT INTO employee ( first_name, last_name, display_name, email,password, phone_number) 
              VALUES ( ?, ?, ?, ?, ?,?)';
    $values = [
        $data['first_name'],
        $data['last_name'],
        $data['display_name'], 
        $data['email'],
        $data['password'],
        $data['phone_number']
    ];              

    $result = $employee->StoreEmployees($query, $values);
    
    if ($result) {
        // echo "Employee successfully added!";
        header('location: '.'/');

    }
    else {
        echo "Failed to store employee.";
    }
}
?>